<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $DestinationCidrBlock
 * @property string|null $DestinationPrefixListId
 * @property string|null $DestinationIpv6CidrBlock
 * @property ActionTarget|null $VpcEndpointId
 * @property ActionTarget|null $GatewayId
 * @property ActionTarget $RouteTableId
 */
class EC2CreateRouteAction extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     DestinationCidrBlock?: string|null,
     *     DestinationPrefixListId?: string|null,
     *     DestinationIpv6CidrBlock?: string|null,
     *     VpcEndpointId?: ActionTarget|null,
     *     GatewayId?: ActionTarget|null,
     *     RouteTableId: ActionTarget
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
