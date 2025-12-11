<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateLicenseAssetGroup;

trait CreateLicenseAssetGroupTrait
{
    /**
     * @param CreateLicenseAssetGroupRequest $args
     * @return CreateLicenseAssetGroupResponse
     */
    public function createLicenseAssetGroup(CreateLicenseAssetGroupRequest $args)
    {
        $result = parent::createLicenseAssetGroup($args->toArray());
        return new CreateLicenseAssetGroupResponse($result->toArray());
    }
}
