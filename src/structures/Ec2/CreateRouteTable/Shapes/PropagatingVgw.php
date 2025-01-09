<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateRouteTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GatewayId
 */
class PropagatingVgw extends Shape
{
    /**
     * @param array{GatewayId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
