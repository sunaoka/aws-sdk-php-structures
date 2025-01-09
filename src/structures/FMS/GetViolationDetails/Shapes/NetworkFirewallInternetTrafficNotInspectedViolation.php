<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubnetId
 * @property string $SubnetAvailabilityZone
 * @property string $RouteTableId
 * @property list<Route> $ViolatingRoutes
 * @property bool $IsRouteTableUsedInDifferentAZ
 * @property string $CurrentFirewallSubnetRouteTable
 * @property string $ExpectedFirewallEndpoint
 * @property string $FirewallSubnetId
 * @property list<ExpectedRoute> $ExpectedFirewallSubnetRoutes
 * @property list<Route> $ActualFirewallSubnetRoutes
 * @property string $InternetGatewayId
 * @property string $CurrentInternetGatewayRouteTable
 * @property list<ExpectedRoute> $ExpectedInternetGatewayRoutes
 * @property list<Route> $ActualInternetGatewayRoutes
 * @property string $VpcId
 */
class NetworkFirewallInternetTrafficNotInspectedViolation extends Shape
{
    /**
     * @param array{
     *     SubnetId?: string,
     *     SubnetAvailabilityZone?: string,
     *     RouteTableId?: string,
     *     ViolatingRoutes?: list<Route>,
     *     IsRouteTableUsedInDifferentAZ?: bool,
     *     CurrentFirewallSubnetRouteTable?: string,
     *     ExpectedFirewallEndpoint?: string,
     *     FirewallSubnetId?: string,
     *     ExpectedFirewallSubnetRoutes?: list<ExpectedRoute>,
     *     ActualFirewallSubnetRoutes?: list<Route>,
     *     InternetGatewayId?: string,
     *     CurrentInternetGatewayRouteTable?: string,
     *     ExpectedInternetGatewayRoutes?: list<ExpectedRoute>,
     *     ActualInternetGatewayRoutes?: list<Route>,
     *     VpcId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
