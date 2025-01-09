<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayAttachments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransitGatewayRouteTableId
 * @property 'associating'|'associated'|'disassociating'|'disassociated' $State
 */
class TransitGatewayAttachmentAssociation extends Shape
{
    /**
     * @param array{
     *     TransitGatewayRouteTableId?: string,
     *     State?: 'associating'|'associated'|'disassociating'|'disassociated'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
