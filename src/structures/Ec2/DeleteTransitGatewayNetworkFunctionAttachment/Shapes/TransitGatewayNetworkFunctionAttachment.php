<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayNetworkFunctionAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayAttachmentId
 * @property string|null $TransitGatewayId
 * @property string|null $TransitGatewayOwnerId
 * @property string|null $ResourceOwnerId
 * @property string|null $ResourceId
 * @property list<string>|null $AvailabilityZones
 * @property list<string>|null $AvailabilityZoneIds
 * @property 'initiating'|'initiatingRequest'|'pendingAcceptance'|'rollingBack'|'pending'|'available'|'modifying'|'deleting'|'deleted'|'failed'|'rejected'|'rejecting'|'failing'|null $State
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property list<Tag>|null $Tags
 */
class TransitGatewayNetworkFunctionAttachment extends Shape
{
    /**
     * @param array{
     *     TransitGatewayAttachmentId?: string|null,
     *     TransitGatewayId?: string|null,
     *     TransitGatewayOwnerId?: string|null,
     *     ResourceOwnerId?: string|null,
     *     ResourceId?: string|null,
     *     AvailabilityZones?: list<string>|null,
     *     AvailabilityZoneIds?: list<string>|null,
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
