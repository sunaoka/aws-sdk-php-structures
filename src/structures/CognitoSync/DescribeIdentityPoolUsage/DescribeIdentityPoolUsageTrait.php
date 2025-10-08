<?php

namespace Sunaoka\Aws\Structures\CognitoSync\DescribeIdentityPoolUsage;

trait DescribeIdentityPoolUsageTrait
{
    /**
     * @param DescribeIdentityPoolUsageRequest $args
     * @return DescribeIdentityPoolUsageResponse
     */
    public function describeIdentityPoolUsage(DescribeIdentityPoolUsageRequest $args)
    {
        $result = parent::describeIdentityPoolUsage($args->toArray());
        return new DescribeIdentityPoolUsageResponse($result->toArray());
    }
}
