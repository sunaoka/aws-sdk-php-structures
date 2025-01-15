<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SubnetId
 * @property string|null $VpcId
 * @property string|null $RouteTableId
 * @property list<Route>|null $ViolatingRoutes
 * @property string|null $SubnetAvailabilityZone
 * @property string|null $SubnetAvailabilityZoneId
 * @property string|null $CurrentFirewallSubnetRouteTable
 * @property string|null $FirewallSubnetId
 * @property list<Route>|null $FirewallSubnetRoutes
 * @property string|null $InternetGatewayId
 * @property string|null $CurrentInternetGatewayRouteTable
 * @property list<Route>|null $InternetGatewayRoutes
 */
class RouteHasOutOfScopeEndpointViolation extends Shape
{
    /**
     * @param array{
     *     SubnetId?: string|null,
     *     VpcId?: string|null,
     *     RouteTableId?: string|null,
     *     ViolatingRoutes?: list<Route>|null,
     *     SubnetAvailabilityZone?: string|null,
     *     SubnetAvailabilityZoneId?: string|null,
     *     CurrentFirewallSubnetRouteTable?: string|null,
     *     FirewallSubnetId?: string|null,
     *     FirewallSubnetRoutes?: list<Route>|null,
     *     InternetGatewayId?: string|null,
     *     CurrentInternetGatewayRouteTable?: string|null,
     *     InternetGatewayRoutes?: list<Route>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
