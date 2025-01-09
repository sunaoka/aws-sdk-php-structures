<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListPeerings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property 'TRANSIT_GATEWAY' $PeeringType
 * @property string $EdgeLocation
 * @property 'CREATING'|'FAILED'|'AVAILABLE'|'DELETING' $State
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListPeeringsRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId?: string,
     *     PeeringType?: 'TRANSIT_GATEWAY',
     *     EdgeLocation?: string,
     *     State?: 'CREATING'|'FAILED'|'AVAILABLE'|'DELETING',
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
