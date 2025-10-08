<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListAssociationsForLicenseConfiguration;

trait ListAssociationsForLicenseConfigurationTrait
{
    /**
     * @param ListAssociationsForLicenseConfigurationRequest $args
     * @return ListAssociationsForLicenseConfigurationResponse
     */
    public function listAssociationsForLicenseConfiguration(ListAssociationsForLicenseConfigurationRequest $args)
    {
        $result = parent::listAssociationsForLicenseConfiguration($args->toArray());
        return new ListAssociationsForLicenseConfigurationResponse($result->toArray());
    }
}
