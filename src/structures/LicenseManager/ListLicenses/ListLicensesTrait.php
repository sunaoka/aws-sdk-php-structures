<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenses;

trait ListLicensesTrait
{
    /**
     * @param ListLicensesRequest $args
     * @return ListLicensesResponse
     */
    public function listLicenses(ListLicensesRequest $args)
    {
        $result = parent::listLicenses($args->toArray());
        return new ListLicensesResponse($result->toArray());
    }
}
