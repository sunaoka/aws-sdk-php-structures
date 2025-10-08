<?php

namespace Sunaoka\Aws\Structures\LicenseManager\UpdateLicenseConfiguration;

trait UpdateLicenseConfigurationTrait
{
    /**
     * @param UpdateLicenseConfigurationRequest $args
     * @return UpdateLicenseConfigurationResponse
     */
    public function updateLicenseConfiguration(UpdateLicenseConfigurationRequest $args)
    {
        $result = parent::updateLicenseConfiguration($args->toArray());
        return new UpdateLicenseConfigurationResponse($result->toArray());
    }
}
