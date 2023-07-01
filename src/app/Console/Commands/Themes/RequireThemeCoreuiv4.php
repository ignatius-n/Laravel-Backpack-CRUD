<?php

namespace Backpack\CRUD\app\Console\Commands\Themes;

use Illuminate\Console\Command;

class RequireThemeCoreuiv4 extends Command
{
    use InstallsTheme;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backpack:require:theme-coreuiv4
                                {--debug} : Show process output or not. Useful for debugging.';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Backpack\'s CoreUIv4 Theme';

    /**
     * Backpack addons install attribute.
     *
     * @var array
     */
    public static $addon = [
        'name'        => 'CoreUIv4',
        'description' => [
            'UI provided by CoreUIv4, a Boostrap 5 template.',
            '<fg=blue>https://github.com/laravel-backpack/theme-coreuiv4/</>',
        ],
        'repo'    => 'backpack/theme-coreuiv4',
        'path'    => 'vendor/backpack/theme-coreuiv4',
        'command' => 'backpack:require:theme-coreuiv4',
        'publish-tag' => 'theme-coreuiv4-config',
    ];

    /**
     * Execute the console command.
     *
     * @return mixed Command-line output
     */
    public function handle()
    {
        $this->installTheme();
    }
}
