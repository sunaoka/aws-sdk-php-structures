<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClientVpnEndpointId
 * @property string|null $DestinationCidr
 * @property string|null $TargetSubnet
 * @property string|null $Type
 * @property string|null $Origin
 * @property ClientVpnRouteStatus|null $Status
 * @property string|null $Description
 */
class ClientVpnRoute extends Shape
{
    /**
     * @param array{
     *     ClientVpnEndpointId?: string|null,
     *     DestinationCidr?: string|null,
     *     TargetSubnet?: string|null,
     *     Type?: string|null,
     *     Origin?: string|null,
     *     Status?: ClientVpnRouteStatus|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
