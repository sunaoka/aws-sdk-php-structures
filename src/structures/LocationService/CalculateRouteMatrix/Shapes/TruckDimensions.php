<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Length
 * @property double|null $Height
 * @property double|null $Width
 * @property 'Meters'|'Feet'|null $Unit
 */
class TruckDimensions extends Shape
{
    /**
     * @param array{
     *     Length?: double|null,
     *     Height?: double|null,
     *     Width?: double|null,
     *     Unit?: 'Meters'|'Feet'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
