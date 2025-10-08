<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseVersions;

trait ListLicenseVersionsTrait
{
    /**
     * @param ListLicenseVersionsRequest $args
     * @return ListLicenseVersionsResponse
     */
    public function listLicenseVersions(ListLicenseVersionsRequest $args)
    {
        $result = parent::listLicenseVersions($args->toArray());
        return new ListLicenseVersionsResponse($result->toArray());
    }
}
