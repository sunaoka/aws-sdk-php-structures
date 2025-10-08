<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeComputeEnvironments;

trait DescribeComputeEnvironmentsTrait
{
    /**
     * @param DescribeComputeEnvironmentsRequest $args
     * @return DescribeComputeEnvironmentsResponse
     */
    public function describeComputeEnvironments(DescribeComputeEnvironmentsRequest $args)
    {
        $result = parent::describeComputeEnvironments($args->toArray());
        return new DescribeComputeEnvironmentsResponse($result->toArray());
    }
}
