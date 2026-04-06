<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeAgentVersions;

trait DescribeAgentVersionsTrait
{
    /**
     * @param DescribeAgentVersionsRequest $args
     * @return DescribeAgentVersionsResponse
     */
    public function describeAgentVersions(DescribeAgentVersionsRequest $args)
    {
        $result = parent::describeAgentVersions($args->toArray());
        return new DescribeAgentVersionsResponse($result->toArray());
    }
}
