<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRcsAgentCountryLaunchStatus;

trait DescribeRcsAgentCountryLaunchStatusTrait
{
    /**
     * @param DescribeRcsAgentCountryLaunchStatusRequest $args
     * @return DescribeRcsAgentCountryLaunchStatusResponse
     */
    public function describeRcsAgentCountryLaunchStatus(DescribeRcsAgentCountryLaunchStatusRequest $args)
    {
        $result = parent::describeRcsAgentCountryLaunchStatus($args->toArray());
        return new DescribeRcsAgentCountryLaunchStatusResponse($result->toArray());
    }
}
