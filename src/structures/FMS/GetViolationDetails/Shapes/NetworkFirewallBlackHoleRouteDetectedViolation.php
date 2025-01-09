<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ViolationTarget
 * @property string $RouteTableId
 * @property string $VpcId
 * @property list<Route> $ViolatingRoutes
 */
class NetworkFirewallBlackHoleRouteDetectedViolation extends Shape
{
    /**
     * @param array{
     *     ViolationTarget?: string,
     *     RouteTableId?: string,
     *     VpcId?: string,
     *     ViolatingRoutes?: list<Route>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
