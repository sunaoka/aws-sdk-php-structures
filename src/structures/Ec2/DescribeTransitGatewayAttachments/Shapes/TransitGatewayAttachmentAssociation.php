<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayAttachments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayRouteTableId
 * @property string|null $TransitGatewayPolicyTableId
 * @property 'associating'|'associated'|'disassociating'|'disassociated'|null $State
 */
class TransitGatewayAttachmentAssociation extends Shape
{
    /**
     * @param array{
     *     TransitGatewayRouteTableId?: string|null,
     *     TransitGatewayPolicyTableId?: string|null,
     *     State?: 'associating'|'associated'|'disassociating'|'disassociated'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
