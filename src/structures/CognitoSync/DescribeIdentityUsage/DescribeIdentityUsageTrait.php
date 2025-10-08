<?php

namespace Sunaoka\Aws\Structures\CognitoSync\DescribeIdentityUsage;

trait DescribeIdentityUsageTrait
{
    /**
     * @param DescribeIdentityUsageRequest $args
     * @return DescribeIdentityUsageResponse
     */
    public function describeIdentityUsage(DescribeIdentityUsageRequest $args)
    {
        $result = parent::describeIdentityUsage($args->toArray());
        return new DescribeIdentityUsageResponse($result->toArray());
    }
}
