<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeStateMachineForExecution;

trait DescribeStateMachineForExecutionTrait
{
    /**
     * @param DescribeStateMachineForExecutionRequest $args
     * @return DescribeStateMachineForExecutionResponse
     */
    public function describeStateMachineForExecution(DescribeStateMachineForExecutionRequest $args)
    {
        $result = parent::describeStateMachineForExecution($args->toArray());
        return new DescribeStateMachineForExecutionResponse($result->toArray());
    }
}
