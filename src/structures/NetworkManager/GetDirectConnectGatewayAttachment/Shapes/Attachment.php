<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetDirectConnectGatewayAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CoreNetworkId
 * @property string $CoreNetworkArn
 * @property string $AttachmentId
 * @property string $OwnerAccountId
 * @property 'CONNECT'|'SITE_TO_SITE_VPN'|'VPC'|'DIRECT_CONNECT_GATEWAY'|'TRANSIT_GATEWAY_ROUTE_TABLE' $AttachmentType
 * @property 'REJECTED'|'PENDING_ATTACHMENT_ACCEPTANCE'|'CREATING'|'FAILED'|'AVAILABLE'|'UPDATING'|'PENDING_NETWORK_UPDATE'|'PENDING_TAG_ACCEPTANCE'|'DELETING' $State
 * @property string $EdgeLocation
 * @property list<string> $EdgeLocations
 * @property string $ResourceArn
 * @property int $AttachmentPolicyRuleNumber
 * @property string $SegmentName
 * @property string $NetworkFunctionGroupName
 * @property list<Tag> $Tags
 * @property ProposedSegmentChange $ProposedSegmentChange
 * @property ProposedNetworkFunctionGroupChange $ProposedNetworkFunctionGroupChange
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property list<AttachmentError> $LastModificationErrors
 */
class Attachment extends Shape
{
    /**
     * @param array{
     *     CoreNetworkId?: string,
     *     CoreNetworkArn?: string,
     *     AttachmentId?: string,
     *     OwnerAccountId?: string,
     *     AttachmentType?: 'CONNECT'|'SITE_TO_SITE_VPN'|'VPC'|'DIRECT_CONNECT_GATEWAY'|'TRANSIT_GATEWAY_ROUTE_TABLE',
     *     State?: 'REJECTED'|'PENDING_ATTACHMENT_ACCEPTANCE'|'CREATING'|'FAILED'|'AVAILABLE'|'UPDATING'|'PENDING_NETWORK_UPDATE'|'PENDING_TAG_ACCEPTANCE'|'DELETING',
     *     EdgeLocation?: string,
     *     EdgeLocations?: list<string>,
     *     ResourceArn?: string,
     *     AttachmentPolicyRuleNumber?: int,
     *     SegmentName?: string,
     *     NetworkFunctionGroupName?: string,
     *     Tags?: list<Tag>,
     *     ProposedSegmentChange?: ProposedSegmentChange,
     *     ProposedNetworkFunctionGroupChange?: ProposedNetworkFunctionGroupChange,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     UpdatedAt?: \Aws\Api\DateTimeResult,
     *     LastModificationErrors?: list<AttachmentError>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
