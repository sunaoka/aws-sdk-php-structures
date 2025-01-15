<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayConnect\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayAttachmentId
 * @property string|null $TransportTransitGatewayAttachmentId
 * @property string|null $TransitGatewayId
 * @property 'initiating'|'initiatingRequest'|'pendingAcceptance'|'rollingBack'|'pending'|'available'|'modifying'|'deleting'|'deleted'|'failed'|'rejected'|'rejecting'|'failing'|null $State
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property TransitGatewayConnectOptions|null $Options
 * @property list<Tag>|null $Tags
 */
class TransitGatewayConnect extends Shape
{
    /**
     * @param array{
     *     TransitGatewayAttachmentId?: string|null,
     *     TransportTransitGatewayAttachmentId?: string|null,
     *     TransitGatewayId?: string|null,
     *     State?: 'initiating'|'initiatingRequest'|'pendingAcceptance'|'rollingBack'|'pending'|'available'|'modifying'|'deleting'|'deleted'|'failed'|'rejected'|'rejecting'|'failing'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     Options?: TransitGatewayConnectOptions|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
