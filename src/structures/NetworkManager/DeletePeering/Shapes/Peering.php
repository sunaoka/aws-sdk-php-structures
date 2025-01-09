<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeletePeering\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CoreNetworkId
 * @property string $CoreNetworkArn
 * @property string $PeeringId
 * @property string $OwnerAccountId
 * @property 'TRANSIT_GATEWAY' $PeeringType
 * @property 'CREATING'|'FAILED'|'AVAILABLE'|'DELETING' $State
 * @property string $EdgeLocation
 * @property string $ResourceArn
 * @property list<Tag> $Tags
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property list<PeeringError> $LastModificationErrors
 */
class Peering extends Shape
{
    /**
     * @param array{
     *     CoreNetworkId?: string,
     *     CoreNetworkArn?: string,
     *     PeeringId?: string,
     *     OwnerAccountId?: string,
     *     PeeringType?: 'TRANSIT_GATEWAY',
     *     State?: 'CREATING'|'FAILED'|'AVAILABLE'|'DELETING',
     *     EdgeLocation?: string,
     *     ResourceArn?: string,
     *     Tags?: list<Tag>,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     LastModificationErrors?: list<PeeringError>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
