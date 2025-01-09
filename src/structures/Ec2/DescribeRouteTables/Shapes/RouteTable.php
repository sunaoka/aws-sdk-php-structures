<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeRouteTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RouteTableAssociation> $Associations
 * @property list<PropagatingVgw> $PropagatingVgws
 * @property string $RouteTableId
 * @property list<Route> $Routes
 * @property list<Tag> $Tags
 * @property string $VpcId
 * @property string $OwnerId
 */
class RouteTable extends Shape
{
    /**
     * @param array{
     *     Associations?: list<RouteTableAssociation>,
     *     PropagatingVgws?: list<PropagatingVgw>,
     *     RouteTableId?: string,
     *     Routes?: list<Route>,
     *     Tags?: list<Tag>,
     *     VpcId?: string,
     *     OwnerId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
