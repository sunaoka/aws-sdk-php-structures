<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeJobExecution;

trait DescribeJobExecutionTrait
{
    /**
     * @param DescribeJobExecutionRequest $args
     * @return DescribeJobExecutionResponse
     */
    public function describeJobExecution(DescribeJobExecutionRequest $args)
    {
        $result = parent::describeJobExecution($args->toArray());
        return new DescribeJobExecutionResponse($result->toArray());
    }
}
