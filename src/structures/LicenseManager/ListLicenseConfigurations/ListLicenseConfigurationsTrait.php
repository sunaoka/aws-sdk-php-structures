<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseConfigurations;

trait ListLicenseConfigurationsTrait
{
    /**
     * @param ListLicenseConfigurationsRequest $args
     * @return ListLicenseConfigurationsResponse
     */
    public function listLicenseConfigurations(ListLicenseConfigurationsRequest $args)
    {
        $result = parent::listLicenseConfigurations($args->toArray());
        return new ListLicenseConfigurationsResponse($result->toArray());
    }
}
