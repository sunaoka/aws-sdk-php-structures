<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Total
 * @property 'Kilograms'|'Pounds'|null $Unit
 */
class TruckWeight extends Shape
{
    /**
     * @param array{
     *     Total?: double|null,
     *     Unit?: 'Kilograms'|'Pounds'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
