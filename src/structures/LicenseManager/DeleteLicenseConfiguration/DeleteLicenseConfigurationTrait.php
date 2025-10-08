<?php

namespace Sunaoka\Aws\Structures\LicenseManager\DeleteLicenseConfiguration;

trait DeleteLicenseConfigurationTrait
{
    /**
     * @param DeleteLicenseConfigurationRequest $args
     * @return DeleteLicenseConfigurationResponse
     */
    public function deleteLicenseConfiguration(DeleteLicenseConfigurationRequest $args)
    {
        $result = parent::deleteLicenseConfiguration($args->toArray());
        return new DeleteLicenseConfigurationResponse($result->toArray());
    }
}
