<?php

namespace Homeful\Buyers\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Class Inventory
 *
 * @property int                  $id
 * @property string               $reference_code
 * @property string               $rating
 * @property Carbon               $paid_on
 * @property bool                 $paid
 *
 * @method   int    getKey()
 */
class Buyer extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference_code',
        'rating',
    ];

    protected $casts = [
        'paid_on' => 'datetime',
    ];

    protected static function newFactory()
    {
        $modelName = static::class;
        $path = 'Homeful\\Buyers\\Database\\Factories\\'.class_basename($modelName).'Factory';

        return app($path)->new();
    }

    public function getPaidAttribute(): bool
    {
        $paidOn = $this->getAttribute('paid_on');

        return $paidOn && $paidOn <= now();
    }

    public function setPaidAttribute(bool $value): self
    {
        $this->forceFill(['paid_on' => $value ? Carbon::now() : null]);

        return $this;
    }
}
