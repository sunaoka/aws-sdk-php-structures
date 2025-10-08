<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateLicenseConfiguration;

trait CreateLicenseConfigurationTrait
{
    /**
     * @param CreateLicenseConfigurationRequest $args
     * @return CreateLicenseConfigurationResponse
     */
    public function createLicenseConfiguration(CreateLicenseConfigurationRequest $args)
    {
        $result = parent::createLicenseConfiguration($args->toArray());
        return new CreateLicenseConfigurationResponse($result->toArray());
    }
}
