<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Height
 * @property double|null $Length
 * @property 'Meters'|'Feet'|null $Unit
 * @property double|null $Width
 */
class TruckDimensions extends Shape
{
    /**
     * @param array{
     *     Height?: double|null,
     *     Length?: double|null,
     *     Unit?: 'Meters'|'Feet'|null,
     *     Width?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
