<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseConfigurationsForOrganization;

trait ListLicenseConfigurationsForOrganizationTrait
{
    /**
     * @param ListLicenseConfigurationsForOrganizationRequest $args
     * @return ListLicenseConfigurationsForOrganizationResponse
     */
    public function listLicenseConfigurationsForOrganization(ListLicenseConfigurationsForOrganizationRequest $args)
    {
        $result = parent::listLicenseConfigurationsForOrganization($args->toArray());
        return new ListLicenseConfigurationsForOrganizationResponse($result->toArray());
    }
}
