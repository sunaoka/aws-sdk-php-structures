<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetTransitGatewayPeering\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Peering $Peering
 * @property string $TransitGatewayArn
 * @property string $TransitGatewayPeeringAttachmentId
 */
class TransitGatewayPeering extends Shape
{
    /**
     * @param array{
     *     Peering?: Peering,
     *     TransitGatewayArn?: string,
     *     TransitGatewayPeeringAttachmentId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
