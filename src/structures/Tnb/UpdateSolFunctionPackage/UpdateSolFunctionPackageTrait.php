<?php

namespace Sunaoka\Aws\Structures\Tnb\UpdateSolFunctionPackage;

trait UpdateSolFunctionPackageTrait
{
    /**
     * @param UpdateSolFunctionPackageRequest $args
     * @return UpdateSolFunctionPackageResponse
     */
    public function updateSolFunctionPackage(UpdateSolFunctionPackageRequest $args)
    {
        $result = parent::updateSolFunctionPackage($args->toArray());
        return new UpdateSolFunctionPackageResponse($result->toArray());
    }
}
