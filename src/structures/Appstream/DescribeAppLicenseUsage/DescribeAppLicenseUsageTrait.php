<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeAppLicenseUsage;

trait DescribeAppLicenseUsageTrait
{
    /**
     * @param DescribeAppLicenseUsageRequest $args
     * @return DescribeAppLicenseUsageResponse
     */
    public function describeAppLicenseUsage(DescribeAppLicenseUsageRequest $args)
    {
        $result = parent::describeAppLicenseUsage($args->toArray());
        return new DescribeAppLicenseUsageResponse($result->toArray());
    }
}
