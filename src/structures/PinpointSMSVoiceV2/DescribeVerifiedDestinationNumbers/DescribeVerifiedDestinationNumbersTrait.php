<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeVerifiedDestinationNumbers;

trait DescribeVerifiedDestinationNumbersTrait
{
    /**
     * @param DescribeVerifiedDestinationNumbersRequest $args
     * @return DescribeVerifiedDestinationNumbersResponse
     */
    public function describeVerifiedDestinationNumbers(DescribeVerifiedDestinationNumbersRequest $args)
    {
        $result = parent::describeVerifiedDestinationNumbers($args->toArray());
        return new DescribeVerifiedDestinationNumbersResponse($result->toArray());
    }
}
