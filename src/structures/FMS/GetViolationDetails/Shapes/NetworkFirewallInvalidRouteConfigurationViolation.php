<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AffectedSubnets
 * @property string $RouteTableId
 * @property bool $IsRouteTableUsedInDifferentAZ
 * @property Route $ViolatingRoute
 * @property string $CurrentFirewallSubnetRouteTable
 * @property string $ExpectedFirewallEndpoint
 * @property string $ActualFirewallEndpoint
 * @property string $ExpectedFirewallSubnetId
 * @property string $ActualFirewallSubnetId
 * @property list<ExpectedRoute> $ExpectedFirewallSubnetRoutes
 * @property list<Route> $ActualFirewallSubnetRoutes
 * @property string $InternetGatewayId
 * @property string $CurrentInternetGatewayRouteTable
 * @property list<ExpectedRoute> $ExpectedInternetGatewayRoutes
 * @property list<Route> $ActualInternetGatewayRoutes
 * @property string $VpcId
 */
class NetworkFirewallInvalidRouteConfigurationViolation extends Shape
{
    /**
     * @param array{
     *     AffectedSubnets?: list<string>,
     *     RouteTableId?: string,
     *     IsRouteTableUsedInDifferentAZ?: bool,
     *     ViolatingRoute?: Route,
     *     CurrentFirewallSubnetRouteTable?: string,
     *     ExpectedFirewallEndpoint?: string,
     *     ActualFirewallEndpoint?: string,
     *     ExpectedFirewallSubnetId?: string,
     *     ActualFirewallSubnetId?: string,
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
