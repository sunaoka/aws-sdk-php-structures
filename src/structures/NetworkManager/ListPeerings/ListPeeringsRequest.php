<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListPeerings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CoreNetworkId
 * @property 'TRANSIT_GATEWAY'|null $PeeringType
 * @property string|null $EdgeLocation
 * @property 'CREATING'|'FAILED'|'AVAILABLE'|'DELETING'|null $State
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class ListPeeringsRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId?: string|null,
     *     PeeringType?: 'TRANSIT_GATEWAY'|null,
     *     EdgeLocation?: string|null,
     *     State?: 'CREATING'|'FAILED'|'AVAILABLE'|'DELETING'|null,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
