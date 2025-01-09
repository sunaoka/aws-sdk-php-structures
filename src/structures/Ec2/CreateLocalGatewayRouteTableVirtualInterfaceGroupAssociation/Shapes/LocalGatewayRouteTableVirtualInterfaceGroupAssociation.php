<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLocalGatewayRouteTableVirtualInterfaceGroupAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LocalGatewayRouteTableVirtualInterfaceGroupAssociationId
 * @property string $LocalGatewayVirtualInterfaceGroupId
 * @property string $LocalGatewayId
 * @property string $LocalGatewayRouteTableId
 * @property string $LocalGatewayRouteTableArn
 * @property string $OwnerId
 * @property string $State
 * @property list<Tag> $Tags
 */
class LocalGatewayRouteTableVirtualInterfaceGroupAssociation extends Shape
{
    /**
     * @param array{
     *     LocalGatewayRouteTableVirtualInterfaceGroupAssociationId?: string,
     *     LocalGatewayVirtualInterfaceGroupId?: string,
     *     LocalGatewayId?: string,
     *     LocalGatewayRouteTableId?: string,
     *     LocalGatewayRouteTableArn?: string,
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
