<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Title
 * @property RouteViolatedConstraints $ViolatedConstraints
 */
class RouteVehicleNoticeDetail extends Shape
{
    /**
     * @param array{
     *     Title?: string,
     *     ViolatedConstraints?: RouteViolatedConstraints
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
