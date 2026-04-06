<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Geocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $StartIndex
 * @property int<0, max>|null $EndIndex
 * @property string|null $Value
 * @property string|null $QueryComponent
 */
class ParsedQueryComponent extends Shape
{
    /**
     * @param array{
     *     StartIndex?: int<0, max>|null,
     *     EndIndex?: int<0, max>|null,
     *     Value?: string|null,
     *     QueryComponent?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
