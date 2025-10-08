<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListPackageVersions;

trait ListPackageVersionsTrait
{
    /**
     * @param ListPackageVersionsRequest $args
     * @return ListPackageVersionsResponse
     */
    public function listPackageVersions(ListPackageVersionsRequest $args)
    {
        $result = parent::listPackageVersions($args->toArray());
        return new ListPackageVersionsResponse($result->toArray());
    }
}
