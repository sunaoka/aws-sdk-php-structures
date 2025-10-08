<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrations;

trait DescribeRegistrationsTrait
{
    /**
     * @param DescribeRegistrationsRequest $args
     * @return DescribeRegistrationsResponse
     */
    public function describeRegistrations(DescribeRegistrationsRequest $args)
    {
        $result = parent::describeRegistrations($args->toArray());
        return new DescribeRegistrationsResponse($result->toArray());
    }
}
