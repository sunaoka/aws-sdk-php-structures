<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeScalingProcessTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProcessName
 */
class ProcessType extends Shape
{
    /**
     * @param array{ProcessName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
