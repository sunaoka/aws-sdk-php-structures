<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Length
 * @property double $Height
 * @property double $Width
 * @property 'Meters'|'Feet' $Unit
 */
class TruckDimensions extends Shape
{
    /**
     * @param array{
     *     Length?: double,
     *     Height?: double,
     *     Width?: double,
     *     Unit?: 'Meters'|'Feet'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
