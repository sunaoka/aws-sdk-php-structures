<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Geocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Number
 */
class SecondaryAddressComponent extends Shape
{
    /**
     * @param array{Number: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
