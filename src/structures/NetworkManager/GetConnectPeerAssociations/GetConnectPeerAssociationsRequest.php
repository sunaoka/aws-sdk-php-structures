<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetConnectPeerAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property list<string>|null $ConnectPeerIds
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class GetConnectPeerAssociationsRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     ConnectPeerIds?: list<string>|null,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
