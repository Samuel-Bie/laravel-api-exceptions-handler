<?php

namespace Salman\ApiExceptionHandler\Commands;

use Illuminate\Console\Command;

class PublishTraits extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'publish:traits';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will publish all trait for api-exceptions-handler';

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
    public function handle()
    {
        $this->info('All files have been published');
    }
}
