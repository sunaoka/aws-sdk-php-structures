<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListUsageForLicenseConfiguration;

trait ListUsageForLicenseConfigurationTrait
{
    /**
     * @param ListUsageForLicenseConfigurationRequest $args
     * @return ListUsageForLicenseConfigurationResponse
     */
    public function listUsageForLicenseConfiguration(ListUsageForLicenseConfigurationRequest $args)
    {
        $result = parent::listUsageForLicenseConfiguration($args->toArray());
        return new ListUsageForLicenseConfigurationResponse($result->toArray());
    }
}
