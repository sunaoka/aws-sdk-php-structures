<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeAccountLimits;

trait DescribeAccountLimitsTrait
{
    /**
     * @param DescribeAccountLimitsRequest $args
     * @return DescribeAccountLimitsResponse
     */
    public function describeAccountLimits(DescribeAccountLimitsRequest $args)
    {
        $result = parent::describeAccountLimits($args->toArray());
        return new DescribeAccountLimitsResponse($result->toArray());
    }
}
