<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListConnectPeers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property string $ConnectAttachmentId
 * @property int<1, 500> $MaxResults
 * @property string $NextToken
 */
class ListConnectPeersRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId?: string,
     *     ConnectAttachmentId?: string,
     *     MaxResults?: int<1, 500>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
