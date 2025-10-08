<?php

namespace Sunaoka\Aws\Structures\Iot\ListPackages;

trait ListPackagesTrait
{
    /**
     * @param ListPackagesRequest $args
     * @return ListPackagesResponse
     */
    public function listPackages(ListPackagesRequest $args)
    {
        $result = parent::listPackages($args->toArray());
        return new ListPackagesResponse($result->toArray());
    }
}
