<?php

namespace Sunaoka\Aws\Structures\LicenseManager\DeleteLicenseAssetGroup;

trait DeleteLicenseAssetGroupTrait
{
    /**
     * @param DeleteLicenseAssetGroupRequest $args
     * @return DeleteLicenseAssetGroupResponse
     */
    public function deleteLicenseAssetGroup(DeleteLicenseAssetGroupRequest $args)
    {
        $result = parent::deleteLicenseAssetGroup($args->toArray());
        return new DeleteLicenseAssetGroupResponse($result->toArray());
    }
}
