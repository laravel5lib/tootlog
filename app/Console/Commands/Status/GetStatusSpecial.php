<?php

namespace App\Console\Commands\Status;

use Illuminate\Console\Command;

use App\Repository\Account\AccountRepositoryInterface as Account;

use App\Jobs\Status\GetStatusJob;

class GetStatusSpecial extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'toot:statuses-special';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get statuses. Special';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(Account $account)
    {
        info('toot:statuses-special start');

        $accounts = $account->special();

        foreach ($accounts as $account) {
            GetStatusJob::dispatch($account);
        }
    }
}
