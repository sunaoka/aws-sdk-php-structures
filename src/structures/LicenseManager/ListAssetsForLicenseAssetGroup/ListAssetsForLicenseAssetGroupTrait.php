<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListAssetsForLicenseAssetGroup;

trait ListAssetsForLicenseAssetGroupTrait
{
    /**
     * @param ListAssetsForLicenseAssetGroupRequest $args
     * @return ListAssetsForLicenseAssetGroupResponse
     */
    public function listAssetsForLicenseAssetGroup(ListAssetsForLicenseAssetGroupRequest $args)
    {
        $result = parent::listAssetsForLicenseAssetGroup($args->toArray());
        return new ListAssetsForLicenseAssetGroupResponse($result->toArray());
    }
}
