<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationVersions;

trait DescribeRegistrationVersionsTrait
{
    /**
     * @param DescribeRegistrationVersionsRequest $args
     * @return DescribeRegistrationVersionsResponse
     */
    public function describeRegistrationVersions(DescribeRegistrationVersionsRequest $args)
    {
        $result = parent::describeRegistrationVersions($args->toArray());
        return new DescribeRegistrationVersionsResponse($result->toArray());
    }
}
