<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeAgents;

trait DescribeAgentsTrait
{
    /**
     * @param DescribeAgentsRequest $args
     * @return DescribeAgentsResponse
     */
    public function describeAgents(DescribeAgentsRequest $args)
    {
        $result = parent::describeAgents($args->toArray());
        return new DescribeAgentsResponse($result->toArray());
    }
}
