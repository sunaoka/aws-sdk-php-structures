<?php

namespace Sunaoka\Aws\Structures\Tnb\DeleteSolFunctionPackage;

trait DeleteSolFunctionPackageTrait
{
    /**
     * @param DeleteSolFunctionPackageRequest $args
     * @return void
     */
    public function deleteSolFunctionPackage(DeleteSolFunctionPackageRequest $args)
    {
        parent::deleteSolFunctionPackage($args->toArray());
    }
}
