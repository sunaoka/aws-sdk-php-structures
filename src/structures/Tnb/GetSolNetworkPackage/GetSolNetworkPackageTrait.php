<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolNetworkPackage;

trait GetSolNetworkPackageTrait
{
    /**
     * @param GetSolNetworkPackageRequest $args
     * @return GetSolNetworkPackageResponse
     */
    public function getSolNetworkPackage(GetSolNetworkPackageRequest $args)
    {
        $result = parent::getSolNetworkPackage($args->toArray());
        return new GetSolNetworkPackageResponse($result->toArray());
    }
}
