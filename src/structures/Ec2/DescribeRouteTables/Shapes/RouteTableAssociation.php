<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeRouteTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Main
 * @property string|null $RouteTableAssociationId
 * @property string|null $RouteTableId
 * @property string|null $SubnetId
 * @property string|null $GatewayId
 * @property RouteTableAssociationState|null $AssociationState
 */
class RouteTableAssociation extends Shape
{
    /**
     * @param array{
     *     Main?: bool|null,
     *     RouteTableAssociationId?: string|null,
     *     RouteTableId?: string|null,
     *     SubnetId?: string|null,
     *     GatewayId?: string|null,
     *     AssociationState?: RouteTableAssociationState|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
