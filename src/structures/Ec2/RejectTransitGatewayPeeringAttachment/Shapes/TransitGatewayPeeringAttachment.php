<?php

namespace Sunaoka\Aws\Structures\Ec2\RejectTransitGatewayPeeringAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayAttachmentId
 * @property string|null $AccepterTransitGatewayAttachmentId
 * @property PeeringTgwInfo|null $RequesterTgwInfo
 * @property PeeringTgwInfo|null $AccepterTgwInfo
 * @property TransitGatewayPeeringAttachmentOptions|null $Options
 * @property PeeringAttachmentStatus|null $Status
 * @property 'initiating'|'initiatingRequest'|'pendingAcceptance'|'rollingBack'|'pending'|'available'|'modifying'|'deleting'|'deleted'|'failed'|'rejected'|'rejecting'|'failing'|null $State
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property list<Tag>|null $Tags
 */
class TransitGatewayPeeringAttachment extends Shape
{
    /**
     * @param array{
     *     TransitGatewayAttachmentId?: string|null,
     *     AccepterTransitGatewayAttachmentId?: string|null,
     *     RequesterTgwInfo?: PeeringTgwInfo|null,
     *     AccepterTgwInfo?: PeeringTgwInfo|null,
     *     Options?: TransitGatewayPeeringAttachmentOptions|null,
     *     Status?: PeeringAttachmentStatus|null,
     *     State?: 'initiating'|'initiatingRequest'|'pendingAcceptance'|'rollingBack'|'pending'|'available'|'modifying'|'deleting'|'deleted'|'failed'|'rejected'|'rejecting'|'failing'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
