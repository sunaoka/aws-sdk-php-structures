<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribePhoneNumbers;

trait DescribePhoneNumbersTrait
{
    /**
     * @param DescribePhoneNumbersRequest $args
     * @return DescribePhoneNumbersResponse
     */
    public function describePhoneNumbers(DescribePhoneNumbersRequest $args)
    {
        $result = parent::describePhoneNumbers($args->toArray());
        return new DescribePhoneNumbersResponse($result->toArray());
    }
}
