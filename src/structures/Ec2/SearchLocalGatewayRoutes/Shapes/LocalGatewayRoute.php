<?php

namespace Sunaoka\Aws\Structures\Ec2\SearchLocalGatewayRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationCidrBlock
 * @property string $LocalGatewayVirtualInterfaceGroupId
 * @property 'static'|'propagated' $Type
 * @property 'pending'|'active'|'blackhole'|'deleting'|'deleted' $State
 * @property string $LocalGatewayRouteTableId
 * @property string $LocalGatewayRouteTableArn
 * @property string $OwnerId
 * @property string $SubnetId
 * @property string $CoipPoolId
 * @property string $NetworkInterfaceId
 * @property string $DestinationPrefixListId
 */
class LocalGatewayRoute extends Shape
{
    /**
     * @param array{
     *     DestinationCidrBlock?: string,
     *     LocalGatewayVirtualInterfaceGroupId?: string,
     *     Type?: 'static'|'propagated',
     *     State?: 'pending'|'active'|'blackhole'|'deleting'|'deleted',
     *     LocalGatewayRouteTableId?: string,
     *     LocalGatewayRouteTableArn?: string,
     *     OwnerId?: string,
     *     SubnetId?: string,
     *     CoipPoolId?: string,
     *     NetworkInterfaceId?: string,
     *     DestinationPrefixListId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
