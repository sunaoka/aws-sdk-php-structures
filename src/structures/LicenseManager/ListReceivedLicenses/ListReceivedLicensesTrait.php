<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListReceivedLicenses;

trait ListReceivedLicensesTrait
{
    /**
     * @param ListReceivedLicensesRequest $args
     * @return ListReceivedLicensesResponse
     */
    public function listReceivedLicenses(ListReceivedLicensesRequest $args)
    {
        $result = parent::listReceivedLicenses($args->toArray());
        return new ListReceivedLicensesResponse($result->toArray());
    }
}
