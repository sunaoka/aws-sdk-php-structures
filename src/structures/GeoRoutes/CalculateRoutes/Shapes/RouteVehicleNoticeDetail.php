<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Title
 * @property RouteViolatedConstraints|null $ViolatedConstraints
 */
class RouteVehicleNoticeDetail extends Shape
{
    /**
     * @param array{
     *     Title?: string|null,
     *     ViolatedConstraints?: RouteViolatedConstraints|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
