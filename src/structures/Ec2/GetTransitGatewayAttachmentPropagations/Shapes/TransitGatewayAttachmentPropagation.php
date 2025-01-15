<?php

namespace Sunaoka\Aws\Structures\Ec2\GetTransitGatewayAttachmentPropagations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayRouteTableId
 * @property 'enabling'|'enabled'|'disabling'|'disabled'|null $State
 */
class TransitGatewayAttachmentPropagation extends Shape
{
    /**
     * @param array{
     *     TransitGatewayRouteTableId?: string|null,
     *     State?: 'enabling'|'enabled'|'disabling'|'disabled'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
