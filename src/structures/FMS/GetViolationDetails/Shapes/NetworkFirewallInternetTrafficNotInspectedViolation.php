<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SubnetId
 * @property string|null $SubnetAvailabilityZone
 * @property string|null $RouteTableId
 * @property list<Route>|null $ViolatingRoutes
 * @property bool|null $IsRouteTableUsedInDifferentAZ
 * @property string|null $CurrentFirewallSubnetRouteTable
 * @property string|null $ExpectedFirewallEndpoint
 * @property string|null $FirewallSubnetId
 * @property list<ExpectedRoute>|null $ExpectedFirewallSubnetRoutes
 * @property list<Route>|null $ActualFirewallSubnetRoutes
 * @property string|null $InternetGatewayId
 * @property string|null $CurrentInternetGatewayRouteTable
 * @property list<ExpectedRoute>|null $ExpectedInternetGatewayRoutes
 * @property list<Route>|null $ActualInternetGatewayRoutes
 * @property string|null $VpcId
 */
class NetworkFirewallInternetTrafficNotInspectedViolation extends Shape
{
    /**
     * @param array{
     *     SubnetId?: string|null,
     *     SubnetAvailabilityZone?: string|null,
     *     RouteTableId?: string|null,
     *     ViolatingRoutes?: list<Route>|null,
     *     IsRouteTableUsedInDifferentAZ?: bool|null,
     *     CurrentFirewallSubnetRouteTable?: string|null,
     *     ExpectedFirewallEndpoint?: string|null,
     *     FirewallSubnetId?: string|null,
     *     ExpectedFirewallSubnetRoutes?: list<ExpectedRoute>|null,
     *     ActualFirewallSubnetRoutes?: list<Route>|null,
     *     InternetGatewayId?: string|null,
     *     CurrentInternetGatewayRouteTable?: string|null,
     *     ExpectedInternetGatewayRoutes?: list<ExpectedRoute>|null,
     *     ActualInternetGatewayRoutes?: list<Route>|null,
     *     VpcId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
