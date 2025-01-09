<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GatewayId
 * @property list<Route> $ViolatingRoutes
 * @property string $RouteTableId
 * @property string $VpcId
 */
class NetworkFirewallUnexpectedGatewayRoutesViolation extends Shape
{
    /**
     * @param array{
     *     GatewayId?: string,
     *     ViolatingRoutes?: list<Route>,
     *     RouteTableId?: string,
     *     VpcId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
