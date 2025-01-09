<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationCidrBlock
 * @property list<NetworkRouteDestination> $Destinations
 * @property string $PrefixListId
 * @property 'ACTIVE'|'BLACKHOLE' $State
 * @property 'PROPAGATED'|'STATIC' $Type
 */
class NetworkRoute extends Shape
{
    /**
     * @param array{
     *     DestinationCidrBlock?: string,
     *     Destinations?: list<NetworkRouteDestination>,
     *     PrefixListId?: string,
     *     State?: 'ACTIVE'|'BLACKHOLE',
     *     Type?: 'PROPAGATED'|'STATIC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
