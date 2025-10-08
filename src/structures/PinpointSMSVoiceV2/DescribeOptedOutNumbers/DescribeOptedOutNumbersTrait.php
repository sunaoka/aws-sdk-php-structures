<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeOptedOutNumbers;

trait DescribeOptedOutNumbersTrait
{
    /**
     * @param DescribeOptedOutNumbersRequest $args
     * @return DescribeOptedOutNumbersResponse
     */
    public function describeOptedOutNumbers(DescribeOptedOutNumbersRequest $args)
    {
        $result = parent::describeOptedOutNumbers($args->toArray());
        return new DescribeOptedOutNumbersResponse($result->toArray());
    }
}
