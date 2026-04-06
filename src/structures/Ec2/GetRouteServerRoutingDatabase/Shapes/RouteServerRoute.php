<?php

namespace Sunaoka\Aws\Structures\Ec2\GetRouteServerRoutingDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RouteServerEndpointId
 * @property string|null $RouteServerPeerId
 * @property list<RouteServerRouteInstallationDetail>|null $RouteInstallationDetails
 * @property 'in-rib'|'in-fib'|null $RouteStatus
 * @property string|null $Prefix
 * @property list<string>|null $AsPaths
 * @property int|null $Med
 * @property string|null $NextHopIp
 */
class RouteServerRoute extends Shape
{
    /**
     * @param array{
     *     RouteServerEndpointId?: string|null,
     *     RouteServerPeerId?: string|null,
     *     RouteInstallationDetails?: list<RouteServerRouteInstallationDetail>|null,
     *     RouteStatus?: 'in-rib'|'in-fib'|null,
     *     Prefix?: string|null,
     *     AsPaths?: list<string>|null,
     *     Med?: int|null,
     *     NextHopIp?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
