<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListPackageVersionAssets;

trait ListPackageVersionAssetsTrait
{
    /**
     * @param ListPackageVersionAssetsRequest $args
     * @return ListPackageVersionAssetsResponse
     */
    public function listPackageVersionAssets(ListPackageVersionAssetsRequest $args)
    {
        $result = parent::listPackageVersionAssets($args->toArray());
        return new ListPackageVersionAssetsResponse($result->toArray());
    }
}
