<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeInstanceTypeLimits;

trait DescribeInstanceTypeLimitsTrait
{
    /**
     * @param DescribeInstanceTypeLimitsRequest $args
     * @return DescribeInstanceTypeLimitsResponse
     */
    public function describeInstanceTypeLimits(DescribeInstanceTypeLimitsRequest $args)
    {
        $result = parent::describeInstanceTypeLimits($args->toArray());
        return new DescribeInstanceTypeLimitsResponse($result->toArray());
    }
}
