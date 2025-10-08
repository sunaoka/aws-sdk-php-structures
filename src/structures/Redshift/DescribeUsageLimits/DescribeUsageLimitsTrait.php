<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeUsageLimits;

trait DescribeUsageLimitsTrait
{
    /**
     * @param DescribeUsageLimitsRequest $args
     * @return DescribeUsageLimitsResponse
     */
    public function describeUsageLimits(DescribeUsageLimitsRequest $args)
    {
        $result = parent::describeUsageLimits($args->toArray());
        return new DescribeUsageLimitsResponse($result->toArray());
    }
}
