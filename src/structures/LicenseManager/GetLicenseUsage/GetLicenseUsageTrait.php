<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicenseUsage;

trait GetLicenseUsageTrait
{
    /**
     * @param GetLicenseUsageRequest $args
     * @return GetLicenseUsageResponse
     */
    public function getLicenseUsage(GetLicenseUsageRequest $args)
    {
        $result = parent::getLicenseUsage($args->toArray());
        return new GetLicenseUsageResponse($result->toArray());
    }
}
