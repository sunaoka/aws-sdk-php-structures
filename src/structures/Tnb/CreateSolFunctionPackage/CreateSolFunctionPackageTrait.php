<?php

namespace Sunaoka\Aws\Structures\Tnb\CreateSolFunctionPackage;

trait CreateSolFunctionPackageTrait
{
    /**
     * @param CreateSolFunctionPackageRequest $args
     * @return CreateSolFunctionPackageResponse
     */
    public function createSolFunctionPackage(CreateSolFunctionPackageRequest $args)
    {
        $result = parent::createSolFunctionPackage($args->toArray());
        return new CreateSolFunctionPackageResponse($result->toArray());
    }
}
