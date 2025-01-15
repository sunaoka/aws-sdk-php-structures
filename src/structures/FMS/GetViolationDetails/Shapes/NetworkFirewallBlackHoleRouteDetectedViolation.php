<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ViolationTarget
 * @property string|null $RouteTableId
 * @property string|null $VpcId
 * @property list<Route>|null $ViolatingRoutes
 */
class NetworkFirewallBlackHoleRouteDetectedViolation extends Shape
{
    /**
     * @param array{
     *     ViolationTarget?: string|null,
     *     RouteTableId?: string|null,
     *     VpcId?: string|null,
     *     ViolatingRoutes?: list<Route>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
