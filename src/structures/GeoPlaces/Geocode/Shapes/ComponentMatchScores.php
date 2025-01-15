<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Geocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Title
 * @property AddressComponentMatchScores|null $Address
 */
class ComponentMatchScores extends Shape
{
    /**
     * @param array{
     *     Title?: double|null,
     *     Address?: AddressComponentMatchScores|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
