<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\GetPackageVersionAsset;

trait GetPackageVersionAssetTrait
{
    /**
     * @param GetPackageVersionAssetRequest $args
     * @return GetPackageVersionAssetResponse
     */
    public function getPackageVersionAsset(GetPackageVersionAssetRequest $args)
    {
        $result = parent::getPackageVersionAsset($args->toArray());
        return new GetPackageVersionAssetResponse($result->toArray());
    }
}
