<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateTransitGatewayPeering\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CoreNetworkId
 * @property string|null $CoreNetworkArn
 * @property string|null $PeeringId
 * @property string|null $OwnerAccountId
 * @property 'TRANSIT_GATEWAY'|null $PeeringType
 * @property 'CREATING'|'FAILED'|'AVAILABLE'|'DELETING'|null $State
 * @property string|null $EdgeLocation
 * @property string|null $ResourceArn
 * @property list<Tag>|null $Tags
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property list<PeeringError>|null $LastModificationErrors
 */
class Peering extends Shape
{
    /**
     * @param array{
     *     CoreNetworkId?: string|null,
     *     CoreNetworkArn?: string|null,
     *     PeeringId?: string|null,
     *     OwnerAccountId?: string|null,
     *     PeeringType?: 'TRANSIT_GATEWAY'|null,
     *     State?: 'CREATING'|'FAILED'|'AVAILABLE'|'DELETING'|null,
     *     EdgeLocation?: string|null,
     *     ResourceArn?: string|null,
     *     Tags?: list<Tag>|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     LastModificationErrors?: list<PeeringError>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
