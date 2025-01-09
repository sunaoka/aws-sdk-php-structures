<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeRouteTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Main
 * @property string $RouteTableAssociationId
 * @property string $RouteTableId
 * @property string $SubnetId
 * @property string $GatewayId
 * @property RouteTableAssociationState $AssociationState
 */
class RouteTableAssociation extends Shape
{
    /**
     * @param array{
     *     Main?: bool,
     *     RouteTableAssociationId?: string,
     *     RouteTableId?: string,
     *     SubnetId?: string,
     *     GatewayId?: string,
     *     AssociationState?: RouteTableAssociationState
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
