<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIWorkloadConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Inline
 */
class WorkloadSpec extends Shape
{
    /**
     * @param array{Inline?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
