<?php

namespace App\Observers;

use App\Models\PrivateLetter;
use App\Notifications\PrivateLetter as PrivateLettered;
use Illuminate\Support\Facades\Log;

class PrivateLetterObserver
{
    /**
     * Handle the private letter "created" event.
     *
     * @param  \App\PrivateLetter  $privateLetter
     * @return void
     */
    public function created(PrivateLetter $privateLetter)
    {
        log::info('观察器里面');
        $privateLetter->user->notification_count = $privateLetter->user->privateLetters->count();
        $privateLetter->user->save();

        //对象数据类型
        // 通知话题作者有新的评论
        $privateLetter->user->notify(new PrivateLettered($privateLetter));
    }

    /**
     * Handle the private letter "updated" event.
     *
     * @param  \App\PrivateLetter  $privateLetter
     * @return void
     */
    public function updated(PrivateLetter $privateLetter)
    {
        //
    }

    /**
     * Handle the private letter "deleted" event.
     *
     * @param  \App\PrivateLetter  $privateLetter
     * @return void
     */
    public function deleted(PrivateLetter $privateLetter)
    {
        //
    }

    /**
     * Handle the private letter "restored" event.
     *
     * @param  \App\PrivateLetter  $privateLetter
     * @return void
     */
    public function restored(PrivateLetter $privateLetter)
    {
        //
    }

    /**
     * Handle the private letter "force deleted" event.
     *
     * @param  \App\PrivateLetter  $privateLetter
     * @return void
     */
    public function forceDeleted(PrivateLetter $privateLetter)
    {
        //
    }
}
