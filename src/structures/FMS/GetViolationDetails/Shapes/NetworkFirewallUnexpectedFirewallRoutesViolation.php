<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FirewallSubnetId
 * @property list<Route> $ViolatingRoutes
 * @property string $RouteTableId
 * @property string $FirewallEndpoint
 * @property string $VpcId
 */
class NetworkFirewallUnexpectedFirewallRoutesViolation extends Shape
{
    /**
     * @param array{
     *     FirewallSubnetId?: string,
     *     ViolatingRoutes?: list<Route>,
     *     RouteTableId?: string,
     *     FirewallEndpoint?: string,
     *     VpcId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
