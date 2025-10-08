<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImagePackages;

trait ListImagePackagesTrait
{
    /**
     * @param ListImagePackagesRequest $args
     * @return ListImagePackagesResponse
     */
    public function listImagePackages(ListImagePackagesRequest $args)
    {
        $result = parent::listImagePackages($args->toArray());
        return new ListImagePackagesResponse($result->toArray());
    }
}
