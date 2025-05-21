<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\UuidInterface;
use Spatie\LaravelPackageTools\Concerns\Package\HasTranslations;

/**
 * @property int $id
 * @property string|array $name
 * @property string $slug
 * @property string|null $cato_code
 * @property array|null $coordinates
 * @property int $weight
 * @property bool $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
class City extends Model
{
    use HasTranslations;

    protected $fillable = [
        'name',
        'slug',
        'cato_code',
        'coordinates',
        'weight',
        'active',
    ];

    public $translatable = [
        'name',
    ];
}
