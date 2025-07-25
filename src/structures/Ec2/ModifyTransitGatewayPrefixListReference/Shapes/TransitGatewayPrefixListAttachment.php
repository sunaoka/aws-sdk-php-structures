<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGatewayPrefixListReference\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayAttachmentId
 * @property 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'|'network-function'|null $ResourceType
 * @property string|null $ResourceId
 */
class TransitGatewayPrefixListAttachment extends Shape
{
    /**
     * @param array{
     *     TransitGatewayAttachmentId?: string|null,
     *     ResourceType?: 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'|'network-function'|null,
     *     ResourceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
