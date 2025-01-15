<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Distance
 * @property double|null $DurationSeconds
 * @property RouteMatrixEntryError|null $Error
 */
class RouteMatrixEntry extends Shape
{
    /**
     * @param array{
     *     Distance?: double|null,
     *     DurationSeconds?: double|null,
     *     Error?: RouteMatrixEntryError|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
