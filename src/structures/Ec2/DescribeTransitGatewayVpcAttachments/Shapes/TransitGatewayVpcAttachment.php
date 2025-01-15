<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayVpcAttachments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayAttachmentId
 * @property string|null $TransitGatewayId
 * @property string|null $VpcId
 * @property string|null $VpcOwnerId
 * @property 'initiating'|'initiatingRequest'|'pendingAcceptance'|'rollingBack'|'pending'|'available'|'modifying'|'deleting'|'deleted'|'failed'|'rejected'|'rejecting'|'failing'|null $State
 * @property list<string>|null $SubnetIds
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property TransitGatewayVpcAttachmentOptions|null $Options
 * @property list<Tag>|null $Tags
 */
class TransitGatewayVpcAttachment extends Shape
{
    /**
     * @param array{
     *     TransitGatewayAttachmentId?: string|null,
     *     TransitGatewayId?: string|null,
     *     VpcId?: string|null,
     *     VpcOwnerId?: string|null,
     *     State?: 'initiating'|'initiatingRequest'|'pendingAcceptance'|'rollingBack'|'pending'|'available'|'modifying'|'deleting'|'deleted'|'failed'|'rejected'|'rejecting'|'failing'|null,
     *     SubnetIds?: list<string>|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     Options?: TransitGatewayVpcAttachmentOptions|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
