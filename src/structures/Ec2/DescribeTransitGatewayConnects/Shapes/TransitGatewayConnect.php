<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayConnects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransitGatewayAttachmentId
 * @property string $TransportTransitGatewayAttachmentId
 * @property string $TransitGatewayId
 * @property 'initiating'|'initiatingRequest'|'pendingAcceptance'|'rollingBack'|'pending'|'available'|'modifying'|'deleting'|'deleted'|'failed'|'rejected'|'rejecting'|'failing' $State
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property TransitGatewayConnectOptions $Options
 * @property list<Tag> $Tags
 */
class TransitGatewayConnect extends Shape
{
    /**
     * @param array{
     *     TransitGatewayAttachmentId?: string,
     *     TransportTransitGatewayAttachmentId?: string,
     *     TransitGatewayId?: string,
     *     State?: 'initiating'|'initiatingRequest'|'pendingAcceptance'|'rollingBack'|'pending'|'available'|'modifying'|'deleting'|'deleted'|'failed'|'rejected'|'rejecting'|'failing',
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     Options?: TransitGatewayConnectOptions,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
