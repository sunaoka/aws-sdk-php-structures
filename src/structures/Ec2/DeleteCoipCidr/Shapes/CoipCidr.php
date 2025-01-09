<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteCoipCidr\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Cidr
 * @property string $CoipPoolId
 * @property string $LocalGatewayRouteTableId
 */
class CoipCidr extends Shape
{
    /**
     * @param array{
     *     Cidr?: string,
     *     CoipPoolId?: string,
     *     LocalGatewayRouteTableId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
