<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Distance
 * @property double $DurationSeconds
 * @property RouteMatrixEntryError $Error
 */
class RouteMatrixEntry extends Shape
{
    /**
     * @param array{
     *     Distance?: double,
     *     DurationSeconds?: double,
     *     Error?: RouteMatrixEntryError
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
