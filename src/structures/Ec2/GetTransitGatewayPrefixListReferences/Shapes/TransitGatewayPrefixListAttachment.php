<?php

namespace Sunaoka\Aws\Structures\Ec2\GetTransitGatewayPrefixListReferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransitGatewayAttachmentId
 * @property 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering' $ResourceType
 * @property string $ResourceId
 */
class TransitGatewayPrefixListAttachment extends Shape
{
    /**
     * @param array{
     *     TransitGatewayAttachmentId?: string,
     *     ResourceType?: 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering',
     *     ResourceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
