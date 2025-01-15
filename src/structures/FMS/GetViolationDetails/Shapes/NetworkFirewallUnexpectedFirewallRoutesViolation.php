<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FirewallSubnetId
 * @property list<Route>|null $ViolatingRoutes
 * @property string|null $RouteTableId
 * @property string|null $FirewallEndpoint
 * @property string|null $VpcId
 */
class NetworkFirewallUnexpectedFirewallRoutesViolation extends Shape
{
    /**
     * @param array{
     *     FirewallSubnetId?: string|null,
     *     ViolatingRoutes?: list<Route>|null,
     *     RouteTableId?: string|null,
     *     FirewallEndpoint?: string|null,
     *     VpcId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
