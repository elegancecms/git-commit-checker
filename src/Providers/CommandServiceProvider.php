<?php

namespace EleganceCMS\GitCommitChecker\Providers;

use EleganceCMS\GitCommitChecker\Commands\InstallCommand;
use EleganceCMS\GitCommitChecker\Commands\PreCommitHookCommand;
use Illuminate\Support\ServiceProvider;

class CommandServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            InstallCommand::class,
            PreCommitHookCommand::class,
        ]);
    }
}
