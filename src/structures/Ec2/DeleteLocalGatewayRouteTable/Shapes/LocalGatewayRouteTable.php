<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLocalGatewayRouteTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LocalGatewayRouteTableId
 * @property string $LocalGatewayRouteTableArn
 * @property string $LocalGatewayId
 * @property string $OutpostArn
 * @property string $OwnerId
 * @property string $State
 * @property list<Tag> $Tags
 * @property 'direct-vpc-routing'|'coip' $Mode
 * @property StateReason $StateReason
 */
class LocalGatewayRouteTable extends Shape
{
    /**
     * @param array{
     *     LocalGatewayRouteTableId?: string,
     *     LocalGatewayRouteTableArn?: string,
     *     LocalGatewayId?: string,
     *     OutpostArn?: string,
     *     OwnerId?: string,
     *     State?: string,
     *     Tags?: list<Tag>,
     *     Mode?: 'direct-vpc-routing'|'coip',
     *     StateReason?: StateReason
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
