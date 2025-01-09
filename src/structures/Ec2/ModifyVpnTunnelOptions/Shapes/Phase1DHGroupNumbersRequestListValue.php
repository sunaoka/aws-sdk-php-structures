<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpnTunnelOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Value
 */
class Phase1DHGroupNumbersRequestListValue extends Shape
{
    /**
     * @param array{Value?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
