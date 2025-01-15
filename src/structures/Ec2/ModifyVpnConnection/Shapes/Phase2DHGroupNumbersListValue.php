<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpnConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Value
 */
class Phase2DHGroupNumbersListValue extends Shape
{
    /**
     * @param array{Value?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
