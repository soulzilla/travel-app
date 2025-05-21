<?php

namespace App\Filament\Pages\System;

use App\Enums\Languages;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Closure;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Outerweb\FilamentSettings\Filament\Pages\Settings as BaseSettings;

class Settings extends BaseSettings
{
    use HasPageShield;

    public static function getNavigationGroup(): ?string
    {
        return 'System';
    }

    public function schema(): array|Closure
    {
        return [
            Tabs::make('Settings')
                ->schema([
                    Tabs\Tab::make('General')
                        ->schema([
                            TextInput::make('general.brand_name')
                                ->label('Имя бренда')
                                ->required(),
                            Toggle::make('general.site_enabled')
                                ->label('Сайт включен'),
                            CheckboxList::make('general.available_languages')
                                ->label('Доступные языки')
                                ->options(Languages::class)
                        ]),
                ]),
        ];
    }
}
