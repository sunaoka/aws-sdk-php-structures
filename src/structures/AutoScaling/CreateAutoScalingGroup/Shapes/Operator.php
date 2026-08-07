<?php

namespace Sunaoka\Aws\Structures\AutoScaling\CreateAutoScalingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Principal
 */
class Operator extends Shape
{
    /**
     * @param array{Principal: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
