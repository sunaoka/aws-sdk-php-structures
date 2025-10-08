<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListReceivedLicensesForOrganization;

trait ListReceivedLicensesForOrganizationTrait
{
    /**
     * @param ListReceivedLicensesForOrganizationRequest $args
     * @return ListReceivedLicensesForOrganizationResponse
     */
    public function listReceivedLicensesForOrganization(ListReceivedLicensesForOrganizationRequest $args)
    {
        $result = parent::listReceivedLicensesForOrganization($args->toArray());
        return new ListReceivedLicensesForOrganizationResponse($result->toArray());
    }
}
