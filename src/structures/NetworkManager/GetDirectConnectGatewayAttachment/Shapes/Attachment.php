<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetDirectConnectGatewayAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CoreNetworkId
 * @property string|null $CoreNetworkArn
 * @property string|null $AttachmentId
 * @property string|null $OwnerAccountId
 * @property 'CONNECT'|'SITE_TO_SITE_VPN'|'VPC'|'DIRECT_CONNECT_GATEWAY'|'TRANSIT_GATEWAY_ROUTE_TABLE'|null $AttachmentType
 * @property 'REJECTED'|'PENDING_ATTACHMENT_ACCEPTANCE'|'CREATING'|'FAILED'|'AVAILABLE'|'UPDATING'|'PENDING_NETWORK_UPDATE'|'PENDING_TAG_ACCEPTANCE'|'DELETING'|null $State
 * @property string|null $EdgeLocation
 * @property list<string>|null $EdgeLocations
 * @property string|null $ResourceArn
 * @property int|null $AttachmentPolicyRuleNumber
 * @property string|null $SegmentName
 * @property string|null $NetworkFunctionGroupName
 * @property list<Tag>|null $Tags
 * @property ProposedSegmentChange|null $ProposedSegmentChange
 * @property ProposedNetworkFunctionGroupChange|null $ProposedNetworkFunctionGroupChange
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property list<AttachmentError>|null $LastModificationErrors
 */
class Attachment extends Shape
{
    /**
     * @param array{
     *     CoreNetworkId?: string|null,
     *     CoreNetworkArn?: string|null,
     *     AttachmentId?: string|null,
     *     OwnerAccountId?: string|null,
     *     AttachmentType?: 'CONNECT'|'SITE_TO_SITE_VPN'|'VPC'|'DIRECT_CONNECT_GATEWAY'|'TRANSIT_GATEWAY_ROUTE_TABLE'|null,
     *     State?: 'REJECTED'|'PENDING_ATTACHMENT_ACCEPTANCE'|'CREATING'|'FAILED'|'AVAILABLE'|'UPDATING'|'PENDING_NETWORK_UPDATE'|'PENDING_TAG_ACCEPTANCE'|'DELETING'|null,
     *     EdgeLocation?: string|null,
     *     EdgeLocations?: list<string>|null,
     *     ResourceArn?: string|null,
     *     AttachmentPolicyRuleNumber?: int|null,
     *     SegmentName?: string|null,
     *     NetworkFunctionGroupName?: string|null,
     *     Tags?: list<Tag>|null,
     *     ProposedSegmentChange?: ProposedSegmentChange|null,
     *     ProposedNetworkFunctionGroupChange?: ProposedNetworkFunctionGroupChange|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     LastModificationErrors?: list<AttachmentError>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
