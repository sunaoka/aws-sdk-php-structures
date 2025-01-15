<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AffectedSubnets
 * @property string|null $RouteTableId
 * @property bool|null $IsRouteTableUsedInDifferentAZ
 * @property Route|null $ViolatingRoute
 * @property string|null $CurrentFirewallSubnetRouteTable
 * @property string|null $ExpectedFirewallEndpoint
 * @property string|null $ActualFirewallEndpoint
 * @property string|null $ExpectedFirewallSubnetId
 * @property string|null $ActualFirewallSubnetId
 * @property list<ExpectedRoute>|null $ExpectedFirewallSubnetRoutes
 * @property list<Route>|null $ActualFirewallSubnetRoutes
 * @property string|null $InternetGatewayId
 * @property string|null $CurrentInternetGatewayRouteTable
 * @property list<ExpectedRoute>|null $ExpectedInternetGatewayRoutes
 * @property list<Route>|null $ActualInternetGatewayRoutes
 * @property string|null $VpcId
 */
class NetworkFirewallInvalidRouteConfigurationViolation extends Shape
{
    /**
     * @param array{
     *     AffectedSubnets?: list<string>|null,
     *     RouteTableId?: string|null,
     *     IsRouteTableUsedInDifferentAZ?: bool|null,
     *     ViolatingRoute?: Route|null,
     *     CurrentFirewallSubnetRouteTable?: string|null,
     *     ExpectedFirewallEndpoint?: string|null,
     *     ActualFirewallEndpoint?: string|null,
     *     ExpectedFirewallSubnetId?: string|null,
     *     ActualFirewallSubnetId?: string|null,
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
