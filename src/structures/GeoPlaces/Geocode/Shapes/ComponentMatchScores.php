<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Geocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Title
 * @property AddressComponentMatchScores $Address
 */
class ComponentMatchScores extends Shape
{
    /**
     * @param array{
     *     Title?: double,
     *     Address?: AddressComponentMatchScores
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
