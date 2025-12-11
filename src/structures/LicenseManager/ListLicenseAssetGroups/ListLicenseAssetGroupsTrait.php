<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseAssetGroups;

trait ListLicenseAssetGroupsTrait
{
    /**
     * @param ListLicenseAssetGroupsRequest $args
     * @return ListLicenseAssetGroupsResponse
     */
    public function listLicenseAssetGroups(ListLicenseAssetGroupsRequest $args)
    {
        $result = parent::listLicenseAssetGroups($args->toArray());
        return new ListLicenseAssetGroupsResponse($result->toArray());
    }
}
