<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayVpcAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransitGatewayAttachmentId
 * @property string $TransitGatewayId
 * @property string $VpcId
 * @property string $VpcOwnerId
 * @property 'initiating'|'initiatingRequest'|'pendingAcceptance'|'rollingBack'|'pending'|'available'|'modifying'|'deleting'|'deleted'|'failed'|'rejected'|'rejecting'|'failing' $State
 * @property list<string> $SubnetIds
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property TransitGatewayVpcAttachmentOptions $Options
 * @property list<Tag> $Tags
 */
class TransitGatewayVpcAttachment extends Shape
{
    /**
     * @param array{
     *     TransitGatewayAttachmentId?: string,
     *     TransitGatewayId?: string,
     *     VpcId?: string,
     *     VpcOwnerId?: string,
     *     State?: 'initiating'|'initiatingRequest'|'pendingAcceptance'|'rollingBack'|'pending'|'available'|'modifying'|'deleting'|'deleted'|'failed'|'rejected'|'rejecting'|'failing',
     *     SubnetIds?: list<string>,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     Options?: TransitGatewayVpcAttachmentOptions,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
