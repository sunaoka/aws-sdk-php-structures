<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicenseAssetGroup;

trait GetLicenseAssetGroupTrait
{
    /**
     * @param GetLicenseAssetGroupRequest $args
     * @return GetLicenseAssetGroupResponse
     */
    public function getLicenseAssetGroup(GetLicenseAssetGroupRequest $args)
    {
        $result = parent::getLicenseAssetGroup($args->toArray());
        return new GetLicenseAssetGroupResponse($result->toArray());
    }
}
