<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicenseConfiguration;

trait GetLicenseConfigurationTrait
{
    /**
     * @param GetLicenseConfigurationRequest $args
     * @return GetLicenseConfigurationResponse
     */
    public function getLicenseConfiguration(GetLicenseConfigurationRequest $args)
    {
        $result = parent::getLicenseConfiguration($args->toArray());
        return new GetLicenseConfigurationResponse($result->toArray());
    }
}
