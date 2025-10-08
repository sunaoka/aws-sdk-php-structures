<?php

namespace Sunaoka\Aws\Structures\Tnb\ListSolNetworkPackages;

trait ListSolNetworkPackagesTrait
{
    /**
     * @param ListSolNetworkPackagesRequest $args
     * @return ListSolNetworkPackagesResponse
     */
    public function listSolNetworkPackages(ListSolNetworkPackagesRequest $args)
    {
        $result = parent::listSolNetworkPackages($args->toArray());
        return new ListSolNetworkPackagesResponse($result->toArray());
    }
}
