<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeAgent;

trait DescribeAgentTrait
{
    /**
     * @param DescribeAgentRequest $args
     * @return DescribeAgentResponse
     */
    public function describeAgent(DescribeAgentRequest $args)
    {
        $result = parent::describeAgent($args->toArray());
        return new DescribeAgentResponse($result->toArray());
    }
}
