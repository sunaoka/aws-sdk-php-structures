<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeTaskExecution;

trait DescribeTaskExecutionTrait
{
    /**
     * @param DescribeTaskExecutionRequest $args
     * @return DescribeTaskExecutionResponse
     */
    public function describeTaskExecution(DescribeTaskExecutionRequest $args)
    {
        $result = parent::describeTaskExecution($args->toArray());
        return new DescribeTaskExecutionResponse($result->toArray());
    }
}
