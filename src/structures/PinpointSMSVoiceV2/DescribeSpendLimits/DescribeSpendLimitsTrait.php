<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeSpendLimits;

trait DescribeSpendLimitsTrait
{
    /**
     * @param DescribeSpendLimitsRequest $args
     * @return DescribeSpendLimitsResponse
     */
    public function describeSpendLimits(DescribeSpendLimitsRequest $args)
    {
        $result = parent::describeSpendLimits($args->toArray());
        return new DescribeSpendLimitsResponse($result->toArray());
    }
}
