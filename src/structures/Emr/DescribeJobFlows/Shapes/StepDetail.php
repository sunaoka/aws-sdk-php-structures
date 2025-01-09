<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeJobFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StepConfig $StepConfig
 * @property StepExecutionStatusDetail $ExecutionStatusDetail
 */
class StepDetail extends Shape
{
    /**
     * @param array{
     *     StepConfig: StepConfig,
     *     ExecutionStatusDetail: StepExecutionStatusDetail
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
