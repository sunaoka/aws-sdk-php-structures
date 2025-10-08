<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationFieldValues;

trait DescribeRegistrationFieldValuesTrait
{
    /**
     * @param DescribeRegistrationFieldValuesRequest $args
     * @return DescribeRegistrationFieldValuesResponse
     */
    public function describeRegistrationFieldValues(DescribeRegistrationFieldValuesRequest $args)
    {
        $result = parent::describeRegistrationFieldValues($args->toArray());
        return new DescribeRegistrationFieldValuesResponse($result->toArray());
    }
}
