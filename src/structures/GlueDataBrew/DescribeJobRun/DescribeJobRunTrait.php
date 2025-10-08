<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeJobRun;

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
