<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\PrivateLetter as Letter;
use Illuminate\Support\Facades\Log;

class PrivateLetter extends Notification
{
    use Queueable;

    public $letter;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Letter $letter)
    {
        log::info('消息通知里 私信 ');
        // 注入回复实体，方便 toDatabase 方法中的使用
        $this->letter = $letter;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     */
    public function toDatabase($notifiable)
    {
//        $user = $this->letter->user;
//        $link =  $topic->link(['#reply' . $this->reply->id]);
//
        \Log::info($notifiable.'toDatabase 里');
        log::info('消息通知里 私信  toDatabase 方法里');
        // 存入数据库里的数据
        return [
            'private_letter_id' => $this->letter->id,
//            'private_letter_content' => $this->letter->content,
//            'user_id' => $this->letter->user->id,//发送者
//            'user_name' => $this->letter->user->name,
//            'user_avatar' => $this->letter->user->avatar,
//            'to_id' => 2,//聊天对象ID
        ];
    }
}
