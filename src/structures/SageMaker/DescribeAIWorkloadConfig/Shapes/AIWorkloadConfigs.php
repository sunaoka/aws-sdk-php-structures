<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIWorkloadConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WorkloadSpec $WorkloadSpec
 */
class AIWorkloadConfigs extends Shape
{
    /**
     * @param array{WorkloadSpec: WorkloadSpec} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
