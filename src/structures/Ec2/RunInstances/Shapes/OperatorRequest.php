<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Principal
 */
class OperatorRequest extends Shape
{
    /**
     * @param array{Principal?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
