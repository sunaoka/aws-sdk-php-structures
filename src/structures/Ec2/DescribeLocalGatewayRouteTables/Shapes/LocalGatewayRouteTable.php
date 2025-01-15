<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLocalGatewayRouteTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LocalGatewayRouteTableId
 * @property string|null $LocalGatewayRouteTableArn
 * @property string|null $LocalGatewayId
 * @property string|null $OutpostArn
 * @property string|null $OwnerId
 * @property string|null $State
 * @property list<Tag>|null $Tags
 * @property 'direct-vpc-routing'|'coip'|null $Mode
 * @property StateReason|null $StateReason
 */
class LocalGatewayRouteTable extends Shape
{
    /**
     * @param array{
     *     LocalGatewayRouteTableId?: string|null,
     *     LocalGatewayRouteTableArn?: string|null,
     *     LocalGatewayId?: string|null,
     *     OutpostArn?: string|null,
     *     OwnerId?: string|null,
     *     State?: string|null,
     *     Tags?: list<Tag>|null,
     *     Mode?: 'direct-vpc-routing'|'coip'|null,
     *     StateReason?: StateReason|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
