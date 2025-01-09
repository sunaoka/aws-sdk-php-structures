<?php

namespace Sunaoka\Aws\Structures\Ec2\GetTransitGatewayAttachmentPropagations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransitGatewayRouteTableId
 * @property 'enabling'|'enabled'|'disabling'|'disabled' $State
 */
class TransitGatewayAttachmentPropagation extends Shape
{
    /**
     * @param array{
     *     TransitGatewayRouteTableId?: string,
     *     State?: 'enabling'|'enabled'|'disabling'|'disabled'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
