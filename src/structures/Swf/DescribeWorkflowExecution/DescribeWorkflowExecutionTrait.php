<?php

namespace Sunaoka\Aws\Structures\Swf\DescribeWorkflowExecution;

trait DescribeWorkflowExecutionTrait
{
    /**
     * @param DescribeWorkflowExecutionRequest $args
     * @return DescribeWorkflowExecutionResponse
     */
    public function describeWorkflowExecution(DescribeWorkflowExecutionRequest $args)
    {
        $result = parent::describeWorkflowExecution($args->toArray());
        return new DescribeWorkflowExecutionResponse($result->toArray());
    }
}
