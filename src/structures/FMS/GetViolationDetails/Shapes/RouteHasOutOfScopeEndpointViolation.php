<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubnetId
 * @property string $VpcId
 * @property string $RouteTableId
 * @property list<Route> $ViolatingRoutes
 * @property string $SubnetAvailabilityZone
 * @property string $SubnetAvailabilityZoneId
 * @property string $CurrentFirewallSubnetRouteTable
 * @property string $FirewallSubnetId
 * @property list<Route> $FirewallSubnetRoutes
 * @property string $InternetGatewayId
 * @property string $CurrentInternetGatewayRouteTable
 * @property list<Route> $InternetGatewayRoutes
 */
class RouteHasOutOfScopeEndpointViolation extends Shape
{
    /**
     * @param array{
     *     SubnetId?: string,
     *     VpcId?: string,
     *     RouteTableId?: string,
     *     ViolatingRoutes?: list<Route>,
     *     SubnetAvailabilityZone?: string,
     *     SubnetAvailabilityZoneId?: string,
     *     CurrentFirewallSubnetRouteTable?: string,
     *     FirewallSubnetId?: string,
     *     FirewallSubnetRoutes?: list<Route>,
     *     InternetGatewayId?: string,
     *     CurrentInternetGatewayRouteTable?: string,
     *     InternetGatewayRoutes?: list<Route>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
