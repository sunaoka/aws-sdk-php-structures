<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeRouteTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RouteTableAssociation>|null $Associations
 * @property list<PropagatingVgw>|null $PropagatingVgws
 * @property string|null $RouteTableId
 * @property list<Route>|null $Routes
 * @property list<Tag>|null $Tags
 * @property string|null $VpcId
 * @property string|null $OwnerId
 */
class RouteTable extends Shape
{
    /**
     * @param array{
     *     Associations?: list<RouteTableAssociation>|null,
     *     PropagatingVgws?: list<PropagatingVgw>|null,
     *     RouteTableId?: string|null,
     *     Routes?: list<Route>|null,
     *     Tags?: list<Tag>|null,
     *     VpcId?: string|null,
     *     OwnerId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
