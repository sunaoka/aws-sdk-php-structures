<?php

namespace Sunaoka\Aws\Structures\Ec2\SearchLocalGatewayRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DestinationCidrBlock
 * @property string|null $LocalGatewayVirtualInterfaceGroupId
 * @property 'static'|'propagated'|null $Type
 * @property 'pending'|'active'|'blackhole'|'deleting'|'deleted'|null $State
 * @property string|null $LocalGatewayRouteTableId
 * @property string|null $LocalGatewayRouteTableArn
 * @property string|null $OwnerId
 * @property string|null $SubnetId
 * @property string|null $CoipPoolId
 * @property string|null $NetworkInterfaceId
 * @property string|null $DestinationPrefixListId
 */
class LocalGatewayRoute extends Shape
{
    /**
     * @param array{
     *     DestinationCidrBlock?: string|null,
     *     LocalGatewayVirtualInterfaceGroupId?: string|null,
     *     Type?: 'static'|'propagated'|null,
     *     State?: 'pending'|'active'|'blackhole'|'deleting'|'deleted'|null,
     *     LocalGatewayRouteTableId?: string|null,
     *     LocalGatewayRouteTableArn?: string|null,
     *     OwnerId?: string|null,
     *     SubnetId?: string|null,
     *     CoipPoolId?: string|null,
     *     NetworkInterfaceId?: string|null,
     *     DestinationPrefixListId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
