<?php

namespace App\Filament\Pages\System;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use TomatoPHP\FilamentDeveloperGate\Traits\InteractWithDeveloperGate;

class Logs extends \FilipFonal\FilamentLogManager\Pages\Logs
{
    use HasPageShield, InteractWithDeveloperGate;
}
