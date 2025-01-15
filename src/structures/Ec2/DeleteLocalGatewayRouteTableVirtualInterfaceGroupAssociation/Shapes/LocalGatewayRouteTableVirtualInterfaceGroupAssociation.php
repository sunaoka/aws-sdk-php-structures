<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLocalGatewayRouteTableVirtualInterfaceGroupAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LocalGatewayRouteTableVirtualInterfaceGroupAssociationId
 * @property string|null $LocalGatewayVirtualInterfaceGroupId
 * @property string|null $LocalGatewayId
 * @property string|null $LocalGatewayRouteTableId
 * @property string|null $LocalGatewayRouteTableArn
 * @property string|null $OwnerId
 * @property string|null $State
 * @property list<Tag>|null $Tags
 */
class LocalGatewayRouteTableVirtualInterfaceGroupAssociation extends Shape
{
    /**
     * @param array{
     *     LocalGatewayRouteTableVirtualInterfaceGroupAssociationId?: string|null,
     *     LocalGatewayVirtualInterfaceGroupId?: string|null,
     *     LocalGatewayId?: string|null,
     *     LocalGatewayRouteTableId?: string|null,
     *     LocalGatewayRouteTableArn?: string|null,
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
