<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class TestmActiveUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'record:testm-active-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '测试命令行功能';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(User $user)
    {
        $this->info('开始计算...');

        $user->calculateAndCacheActiveUsers();

        $this->info('成功生成!');
    }
}
