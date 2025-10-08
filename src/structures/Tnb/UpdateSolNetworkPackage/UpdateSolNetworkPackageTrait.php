<?php

namespace Sunaoka\Aws\Structures\Tnb\UpdateSolNetworkPackage;

trait UpdateSolNetworkPackageTrait
{
    /**
     * @param UpdateSolNetworkPackageRequest $args
     * @return UpdateSolNetworkPackageResponse
     */
    public function updateSolNetworkPackage(UpdateSolNetworkPackageRequest $args)
    {
        $result = parent::updateSolNetworkPackage($args->toArray());
        return new UpdateSolNetworkPackageResponse($result->toArray());
    }
}
