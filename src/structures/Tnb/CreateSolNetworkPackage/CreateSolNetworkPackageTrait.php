<?php

namespace Sunaoka\Aws\Structures\Tnb\CreateSolNetworkPackage;

trait CreateSolNetworkPackageTrait
{
    /**
     * @param CreateSolNetworkPackageRequest $args
     * @return CreateSolNetworkPackageResponse
     */
    public function createSolNetworkPackage(CreateSolNetworkPackageRequest $args)
    {
        $result = parent::createSolNetworkPackage($args->toArray());
        return new CreateSolNetworkPackageResponse($result->toArray());
    }
}
