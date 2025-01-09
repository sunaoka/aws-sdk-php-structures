<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpnConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Value
 */
class Phase2DHGroupNumbersRequestListValue extends Shape
{
    /**
     * @param array{Value?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
