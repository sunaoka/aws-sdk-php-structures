<?php

namespace Sunaoka\Aws\Structures\Synthetics\DescribeCanariesLastRun;

trait DescribeCanariesLastRunTrait
{
    /**
     * @param DescribeCanariesLastRunRequest $args
     * @return DescribeCanariesLastRunResponse
     */
    public function describeCanariesLastRun(DescribeCanariesLastRunRequest $args)
    {
        $result = parent::describeCanariesLastRun($args->toArray());
        return new DescribeCanariesLastRunResponse($result->toArray());
    }
}
