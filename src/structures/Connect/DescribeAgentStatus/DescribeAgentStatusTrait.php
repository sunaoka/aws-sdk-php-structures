<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeAgentStatus;

trait DescribeAgentStatusTrait
{
    /**
     * @param DescribeAgentStatusRequest $args
     * @return DescribeAgentStatusResponse
     */
    public function describeAgentStatus(DescribeAgentStatusRequest $args)
    {
        $result = parent::describeAgentStatus($args->toArray());
        return new DescribeAgentStatusResponse($result->toArray());
    }
}
