<?php

namespace App\Filament\Plugins;

use App\Filament\Pages\System\Artisan;
use Filament\Contracts\Plugin;
use Filament\Panel;
use TomatoPHP\FilamentDeveloperGate\FilamentDeveloperGatePlugin;

class ArtisanPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-artisan';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->plugin(FilamentDeveloperGatePlugin::make())
            ->pages([
                Artisan::class,
            ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return new static();
    }
}

