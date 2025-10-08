<?php

namespace Sunaoka\Aws\Structures\IoTJobsDataPlane\DescribeJobExecution;

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
