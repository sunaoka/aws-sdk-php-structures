<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientVpnEndpointId
 * @property string $DestinationCidr
 * @property string $TargetSubnet
 * @property string $Type
 * @property string $Origin
 * @property ClientVpnRouteStatus $Status
 * @property string $Description
 */
class ClientVpnRoute extends Shape
{
    /**
     * @param array{
     *     ClientVpnEndpointId?: string,
     *     DestinationCidr?: string,
     *     TargetSubnet?: string,
     *     Type?: string,
     *     Origin?: string,
     *     Status?: ClientVpnRouteStatus,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
