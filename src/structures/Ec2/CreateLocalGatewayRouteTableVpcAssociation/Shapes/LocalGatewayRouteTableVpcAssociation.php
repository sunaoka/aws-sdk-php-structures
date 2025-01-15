<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLocalGatewayRouteTableVpcAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LocalGatewayRouteTableVpcAssociationId
 * @property string|null $LocalGatewayRouteTableId
 * @property string|null $LocalGatewayRouteTableArn
 * @property string|null $LocalGatewayId
 * @property string|null $VpcId
 * @property string|null $OwnerId
 * @property string|null $State
 * @property list<Tag>|null $Tags
 */
class LocalGatewayRouteTableVpcAssociation extends Shape
{
    /**
     * @param array{
     *     LocalGatewayRouteTableVpcAssociationId?: string|null,
     *     LocalGatewayRouteTableId?: string|null,
     *     LocalGatewayRouteTableArn?: string|null,
     *     LocalGatewayId?: string|null,
     *     VpcId?: string|null,
     *     OwnerId?: string|null,
     *     State?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
