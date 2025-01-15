<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DestinationCidrBlock
 * @property list<NetworkRouteDestination>|null $Destinations
 * @property string|null $PrefixListId
 * @property 'ACTIVE'|'BLACKHOLE'|null $State
 * @property 'PROPAGATED'|'STATIC'|null $Type
 */
class NetworkRoute extends Shape
{
    /**
     * @param array{
     *     DestinationCidrBlock?: string|null,
     *     Destinations?: list<NetworkRouteDestination>|null,
     *     PrefixListId?: string|null,
     *     State?: 'ACTIVE'|'BLACKHOLE'|null,
     *     Type?: 'PROPAGATED'|'STATIC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
