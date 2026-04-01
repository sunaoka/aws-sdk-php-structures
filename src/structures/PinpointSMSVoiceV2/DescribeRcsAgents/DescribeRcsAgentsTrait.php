<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRcsAgents;

trait DescribeRcsAgentsTrait
{
    /**
     * @param DescribeRcsAgentsRequest $args
     * @return DescribeRcsAgentsResponse
     */
    public function describeRcsAgents(DescribeRcsAgentsRequest $args)
    {
        $result = parent::describeRcsAgents($args->toArray());
        return new DescribeRcsAgentsResponse($result->toArray());
    }
}
