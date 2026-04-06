<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListAssociatedPackages;

trait ListAssociatedPackagesTrait
{
    /**
     * @param ListAssociatedPackagesRequest $args
     * @return ListAssociatedPackagesResponse
     */
    public function listAssociatedPackages(ListAssociatedPackagesRequest $args)
    {
        $result = parent::listAssociatedPackages($args->toArray());
        return new ListAssociatedPackagesResponse($result->toArray());
    }
}
