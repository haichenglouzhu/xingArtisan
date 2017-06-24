<?php

namespace XingArtisan\Src;

use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'xing:echo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this is echo one string';

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
        $this->info('this is test by xingzhilong');
    }
}
