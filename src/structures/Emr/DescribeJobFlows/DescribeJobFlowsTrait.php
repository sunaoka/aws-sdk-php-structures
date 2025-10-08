<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeJobFlows;

trait DescribeJobFlowsTrait
{
    /**
     * @param DescribeJobFlowsRequest $args
     * @return DescribeJobFlowsResponse
     */
    public function describeJobFlows(DescribeJobFlowsRequest $args)
    {
        $result = parent::describeJobFlows($args->toArray());
        return new DescribeJobFlowsResponse($result->toArray());
    }
}
