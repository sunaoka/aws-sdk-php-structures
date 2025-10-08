<?php

namespace Sunaoka\Aws\Structures\Tnb\DeleteSolNetworkPackage;

trait DeleteSolNetworkPackageTrait
{
    /**
     * @param DeleteSolNetworkPackageRequest $args
     * @return void
     */
    public function deleteSolNetworkPackage(DeleteSolNetworkPackageRequest $args)
    {
        parent::deleteSolNetworkPackage($args->toArray());
    }
}
