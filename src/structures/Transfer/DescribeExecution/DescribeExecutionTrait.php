<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeExecution;

trait DescribeExecutionTrait
{
    /**
     * @param DescribeExecutionRequest $args
     * @return DescribeExecutionResponse
     */
    public function describeExecution(DescribeExecutionRequest $args)
    {
        $result = parent::describeExecution($args->toArray());
        return new DescribeExecutionResponse($result->toArray());
    }
}
