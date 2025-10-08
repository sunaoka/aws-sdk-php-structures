<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DisposePackageVersions;

trait DisposePackageVersionsTrait
{
    /**
     * @param DisposePackageVersionsRequest $args
     * @return DisposePackageVersionsResponse
     */
    public function disposePackageVersions(DisposePackageVersionsRequest $args)
    {
        $result = parent::disposePackageVersions($args->toArray());
        return new DisposePackageVersionsResponse($result->toArray());
    }
}
