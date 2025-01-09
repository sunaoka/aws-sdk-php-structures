<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListAttachments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property 'CONNECT'|'SITE_TO_SITE_VPN'|'VPC'|'DIRECT_CONNECT_GATEWAY'|'TRANSIT_GATEWAY_ROUTE_TABLE' $AttachmentType
 * @property string $EdgeLocation
 * @property 'REJECTED'|'PENDING_ATTACHMENT_ACCEPTANCE'|'CREATING'|'FAILED'|'AVAILABLE'|'UPDATING'|'PENDING_NETWORK_UPDATE'|'PENDING_TAG_ACCEPTANCE'|'DELETING' $State
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListAttachmentsRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId?: string,
     *     AttachmentType?: 'CONNECT'|'SITE_TO_SITE_VPN'|'VPC'|'DIRECT_CONNECT_GATEWAY'|'TRANSIT_GATEWAY_ROUTE_TABLE',
     *     EdgeLocation?: string,
     *     State?: 'REJECTED'|'PENDING_ATTACHMENT_ACCEPTANCE'|'CREATING'|'FAILED'|'AVAILABLE'|'UPDATING'|'PENDING_NETWORK_UPDATE'|'PENDING_TAG_ACCEPTANCE'|'DELETING',
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
