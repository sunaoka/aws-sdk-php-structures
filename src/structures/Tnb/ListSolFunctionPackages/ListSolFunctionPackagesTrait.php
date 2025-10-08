<?php

namespace Sunaoka\Aws\Structures\Tnb\ListSolFunctionPackages;

trait ListSolFunctionPackagesTrait
{
    /**
     * @param ListSolFunctionPackagesRequest $args
     * @return ListSolFunctionPackagesResponse
     */
    public function listSolFunctionPackages(ListSolFunctionPackagesRequest $args)
    {
        $result = parent::listSolFunctionPackages($args->toArray());
        return new ListSolFunctionPackagesResponse($result->toArray());
    }
}
