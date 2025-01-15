<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GatewayId
 * @property list<Route>|null $ViolatingRoutes
 * @property string|null $RouteTableId
 * @property string|null $VpcId
 */
class NetworkFirewallUnexpectedGatewayRoutesViolation extends Shape
{
    /**
     * @param array{
     *     GatewayId?: string|null,
     *     ViolatingRoutes?: list<Route>|null,
     *     RouteTableId?: string|null,
     *     VpcId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
