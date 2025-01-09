<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayAttachments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransitGatewayAttachmentId
 * @property string $TransitGatewayId
 * @property string $TransitGatewayOwnerId
 * @property string $ResourceOwnerId
 * @property 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering' $ResourceType
 * @property string $ResourceId
 * @property 'initiating'|'initiatingRequest'|'pendingAcceptance'|'rollingBack'|'pending'|'available'|'modifying'|'deleting'|'deleted'|'failed'|'rejected'|'rejecting'|'failing' $State
 * @property TransitGatewayAttachmentAssociation $Association
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property list<Tag> $Tags
 */
class TransitGatewayAttachment extends Shape
{
    /**
     * @param array{
     *     TransitGatewayAttachmentId?: string,
     *     TransitGatewayId?: string,
     *     TransitGatewayOwnerId?: string,
     *     ResourceOwnerId?: string,
     *     ResourceType?: 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering',
     *     ResourceId?: string,
     *     State?: 'initiating'|'initiatingRequest'|'pendingAcceptance'|'rollingBack'|'pending'|'available'|'modifying'|'deleting'|'deleted'|'failed'|'rejected'|'rejecting'|'failing',
     *     Association?: TransitGatewayAttachmentAssociation,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
