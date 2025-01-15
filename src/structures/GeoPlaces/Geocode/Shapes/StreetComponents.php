<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Geocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BaseName
 * @property string|null $Type
 * @property 'BeforeBaseName'|'AfterBaseName'|null $TypePlacement
 * @property string|null $TypeSeparator
 * @property string|null $Prefix
 * @property string|null $Suffix
 * @property string|null $Direction
 * @property string|null $Language
 */
class StreetComponents extends Shape
{
    /**
     * @param array{
     *     BaseName?: string|null,
     *     Type?: string|null,
     *     TypePlacement?: 'BeforeBaseName'|'AfterBaseName'|null,
     *     TypeSeparator?: string|null,
     *     Prefix?: string|null,
     *     Suffix?: string|null,
     *     Direction?: string|null,
     *     Language?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
