<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceTransitGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceId
 * @property string|null $TransitGatewayAttachmentId
 * @property 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'|null $ResourceType
 */
class TransitGatewayRouteAttachment extends Shape
{
    /**
     * @param array{
     *     ResourceId?: string|null,
     *     TransitGatewayAttachmentId?: string|null,
     *     ResourceType?: 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
