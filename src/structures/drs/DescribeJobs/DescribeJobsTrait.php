<?php

namespace Sunaoka\Aws\Structures\drs\DescribeJobs;

trait DescribeJobsTrait
{
    /**
     * @param DescribeJobsRequest $args
     * @return DescribeJobsResponse
     */
    public function describeJobs(DescribeJobsRequest $args)
    {
        $result = parent::describeJobs($args->toArray());
        return new DescribeJobsResponse($result->toArray());
    }
}
