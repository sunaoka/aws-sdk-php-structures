<?php

namespace Sunaoka\Aws\Structures\Ec2\RejectTransitGatewayPeeringAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransitGatewayAttachmentId
 * @property string $AccepterTransitGatewayAttachmentId
 * @property PeeringTgwInfo $RequesterTgwInfo
 * @property PeeringTgwInfo $AccepterTgwInfo
 * @property TransitGatewayPeeringAttachmentOptions $Options
 * @property PeeringAttachmentStatus $Status
 * @property 'initiating'|'initiatingRequest'|'pendingAcceptance'|'rollingBack'|'pending'|'available'|'modifying'|'deleting'|'deleted'|'failed'|'rejected'|'rejecting'|'failing' $State
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property list<Tag> $Tags
 */
class TransitGatewayPeeringAttachment extends Shape
{
    /**
     * @param array{
     *     TransitGatewayAttachmentId?: string,
     *     AccepterTransitGatewayAttachmentId?: string,
     *     RequesterTgwInfo?: PeeringTgwInfo,
     *     AccepterTgwInfo?: PeeringTgwInfo,
     *     Options?: TransitGatewayPeeringAttachmentOptions,
     *     Status?: PeeringAttachmentStatus,
     *     State?: 'initiating'|'initiatingRequest'|'pendingAcceptance'|'rollingBack'|'pending'|'available'|'modifying'|'deleting'|'deleted'|'failed'|'rejected'|'rejecting'|'failing',
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
