<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolFunctionPackage;

trait GetSolFunctionPackageTrait
{
    /**
     * @param GetSolFunctionPackageRequest $args
     * @return GetSolFunctionPackageResponse
     */
    public function getSolFunctionPackage(GetSolFunctionPackageRequest $args)
    {
        $result = parent::getSolFunctionPackage($args->toArray());
        return new GetSolFunctionPackageResponse($result->toArray());
    }
}
