<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCoipCidr\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Cidr
 * @property string|null $CoipPoolId
 * @property string|null $LocalGatewayRouteTableId
 */
class CoipCidr extends Shape
{
    /**
     * @param array{
     *     Cidr?: string|null,
     *     CoipPoolId?: string|null,
     *     LocalGatewayRouteTableId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
