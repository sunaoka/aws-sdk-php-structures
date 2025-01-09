<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\GetPlace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BaseName
 * @property string $Type
 * @property 'BeforeBaseName'|'AfterBaseName' $TypePlacement
 * @property string $TypeSeparator
 * @property string $Prefix
 * @property string $Suffix
 * @property string $Direction
 * @property string $Language
 */
class StreetComponents extends Shape
{
    /**
     * @param array{
     *     BaseName?: string,
     *     Type?: string,
     *     TypePlacement?: 'BeforeBaseName'|'AfterBaseName',
     *     TypeSeparator?: string,
     *     Prefix?: string,
     *     Suffix?: string,
     *     Direction?: string,
     *     Language?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
