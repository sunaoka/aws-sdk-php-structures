<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $MaxSpeed
 * @property bool $Unlimited
 */
class RouteSpanSpeedLimitDetails extends Shape
{
    /**
     * @param array{
     *     MaxSpeed?: double,
     *     Unlimited?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
