<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $MaxSpeed
 * @property bool|null $Unlimited
 */
class RouteSpanSpeedLimitDetails extends Shape
{
    /**
     * @param array{
     *     MaxSpeed?: double|null,
     *     Unlimited?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
