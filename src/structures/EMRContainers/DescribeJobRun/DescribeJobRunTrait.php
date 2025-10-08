<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeJobRun;

trait DescribeJobRunTrait
{
    /**
     * @param DescribeJobRunRequest $args
     * @return DescribeJobRunResponse
     */
    public function describeJobRun(DescribeJobRunRequest $args)
    {
        $result = parent::describeJobRun($args->toArray());
        return new DescribeJobRunResponse($result->toArray());
    }
}
