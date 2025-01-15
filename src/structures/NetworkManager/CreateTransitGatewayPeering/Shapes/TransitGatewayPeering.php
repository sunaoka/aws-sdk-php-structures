<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateTransitGatewayPeering\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Peering|null $Peering
 * @property string|null $TransitGatewayArn
 * @property string|null $TransitGatewayPeeringAttachmentId
 */
class TransitGatewayPeering extends Shape
{
    /**
     * @param array{
     *     Peering?: Peering|null,
     *     TransitGatewayArn?: string|null,
     *     TransitGatewayPeeringAttachmentId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
