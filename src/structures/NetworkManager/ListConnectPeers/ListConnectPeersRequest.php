<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListConnectPeers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CoreNetworkId
 * @property string|null $ConnectAttachmentId
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class ListConnectPeersRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId?: string|null,
     *     ConnectAttachmentId?: string|null,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
