<?php

namespace Sunaoka\Aws\Structures\LicenseManager\UpdateLicenseAssetGroup;

trait UpdateLicenseAssetGroupTrait
{
    /**
     * @param UpdateLicenseAssetGroupRequest $args
     * @return UpdateLicenseAssetGroupResponse
     */
    public function updateLicenseAssetGroup(UpdateLicenseAssetGroupRequest $args)
    {
        $result = parent::updateLicenseAssetGroup($args->toArray());
        return new UpdateLicenseAssetGroupResponse($result->toArray());
    }
}
