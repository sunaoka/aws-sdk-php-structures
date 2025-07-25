<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayAttachments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayAttachmentId
 * @property string|null $TransitGatewayId
 * @property string|null $TransitGatewayOwnerId
 * @property string|null $ResourceOwnerId
 * @property 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'|'network-function'|null $ResourceType
 * @property string|null $ResourceId
 * @property 'initiating'|'initiatingRequest'|'pendingAcceptance'|'rollingBack'|'pending'|'available'|'modifying'|'deleting'|'deleted'|'failed'|'rejected'|'rejecting'|'failing'|null $State
 * @property TransitGatewayAttachmentAssociation|null $Association
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property list<Tag>|null $Tags
 */
class TransitGatewayAttachment extends Shape
{
    /**
     * @param array{
     *     TransitGatewayAttachmentId?: string|null,
     *     TransitGatewayId?: string|null,
     *     TransitGatewayOwnerId?: string|null,
     *     ResourceOwnerId?: string|null,
     *     ResourceType?: 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'|'network-function'|null,
     *     ResourceId?: string|null,
     *     State?: 'initiating'|'initiatingRequest'|'pendingAcceptance'|'rollingBack'|'pending'|'available'|'modifying'|'deleting'|'deleted'|'failed'|'rejected'|'rejecting'|'failing'|null,
     *     Association?: TransitGatewayAttachmentAssociation|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
