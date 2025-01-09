<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $DestinationCidrBlock
 * @property string $DestinationPrefixListId
 * @property string $DestinationIpv6CidrBlock
 * @property ActionTarget $GatewayId
 * @property ActionTarget $RouteTableId
 */
class EC2ReplaceRouteAction extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     DestinationCidrBlock?: string,
     *     DestinationPrefixListId?: string,
     *     DestinationIpv6CidrBlock?: string,
     *     GatewayId?: ActionTarget,
     *     RouteTableId: ActionTarget
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
