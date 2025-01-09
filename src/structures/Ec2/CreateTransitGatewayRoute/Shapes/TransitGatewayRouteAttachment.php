<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceId
 * @property string $TransitGatewayAttachmentId
 * @property 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering' $ResourceType
 */
class TransitGatewayRouteAttachment extends Shape
{
    /**
     * @param array{
     *     ResourceId?: string,
     *     TransitGatewayAttachmentId?: string,
     *     ResourceType?: 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
