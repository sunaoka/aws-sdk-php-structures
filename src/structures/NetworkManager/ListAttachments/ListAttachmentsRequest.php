<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListAttachments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CoreNetworkId
 * @property 'CONNECT'|'SITE_TO_SITE_VPN'|'VPC'|'DIRECT_CONNECT_GATEWAY'|'TRANSIT_GATEWAY_ROUTE_TABLE'|null $AttachmentType
 * @property string|null $EdgeLocation
 * @property 'REJECTED'|'PENDING_ATTACHMENT_ACCEPTANCE'|'CREATING'|'FAILED'|'AVAILABLE'|'UPDATING'|'PENDING_NETWORK_UPDATE'|'PENDING_TAG_ACCEPTANCE'|'DELETING'|null $State
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class ListAttachmentsRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId?: string|null,
     *     AttachmentType?: 'CONNECT'|'SITE_TO_SITE_VPN'|'VPC'|'DIRECT_CONNECT_GATEWAY'|'TRANSIT_GATEWAY_ROUTE_TABLE'|null,
     *     EdgeLocation?: string|null,
     *     State?: 'REJECTED'|'PENDING_ATTACHMENT_ACCEPTANCE'|'CREATING'|'FAILED'|'AVAILABLE'|'UPDATING'|'PENDING_NETWORK_UPDATE'|'PENDING_TAG_ACCEPTANCE'|'DELETING'|null,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
