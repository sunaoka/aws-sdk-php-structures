<?php

namespace Sunaoka\Aws\Structures\Ec2\RejectTransitGatewayClientVpnAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayAttachmentId
 * @property string|null $TransitGatewayId
 * @property string|null $ClientVpnEndpointId
 * @property string|null $ClientVpnOwnerId
 * @property 'pending-acceptance'|'pending'|'rejected'|'available'|'deleting'|'deleted'|null $State
 * @property string|null $CreationTime
 */
class TransitGatewayClientVpnAttachment extends Shape
{
    /**
     * @param array{
     *     TransitGatewayAttachmentId?: string|null,
     *     TransitGatewayId?: string|null,
     *     ClientVpnEndpointId?: string|null,
     *     ClientVpnOwnerId?: string|null,
     *     State?: 'pending-acceptance'|'pending'|'rejected'|'available'|'deleting'|'deleted'|null,
     *     CreationTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
