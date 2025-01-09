<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Total
 * @property 'Kilograms'|'Pounds' $Unit
 */
class TruckWeight extends Shape
{
    /**
     * @param array{
     *     Total?: double,
     *     Unit?: 'Kilograms'|'Pounds'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
