<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListPackageVersionDependencies;

trait ListPackageVersionDependenciesTrait
{
    /**
     * @param ListPackageVersionDependenciesRequest $args
     * @return ListPackageVersionDependenciesResponse
     */
    public function listPackageVersionDependencies(ListPackageVersionDependenciesRequest $args)
    {
        $result = parent::listPackageVersionDependencies($args->toArray());
        return new ListPackageVersionDependenciesResponse($result->toArray());
    }
}
