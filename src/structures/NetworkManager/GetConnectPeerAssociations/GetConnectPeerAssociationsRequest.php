<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetConnectPeerAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property list<string> $ConnectPeerIds
 * @property int<1, 500> $MaxResults
 * @property string $NextToken
 */
class GetConnectPeerAssociationsRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     ConnectPeerIds?: list<string>,
     *     MaxResults?: int<1, 500>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
