<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLocalGatewayRouteTableVpcAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LocalGatewayRouteTableVpcAssociationId
 * @property string $LocalGatewayRouteTableId
 * @property string $LocalGatewayRouteTableArn
 * @property string $LocalGatewayId
 * @property string $VpcId
 * @property string $OwnerId
 * @property string $State
 * @property list<Tag> $Tags
 */
class LocalGatewayRouteTableVpcAssociation extends Shape
{
    /**
     * @param array{
     *     LocalGatewayRouteTableVpcAssociationId?: string,
     *     LocalGatewayRouteTableId?: string,
     *     LocalGatewayRouteTableArn?: string,
     *     LocalGatewayId?: string,
     *     VpcId?: string,
     *     OwnerId?: string,
     *     State?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
