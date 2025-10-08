<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\CopyPackageVersions;

trait CopyPackageVersionsTrait
{
    /**
     * @param CopyPackageVersionsRequest $args
     * @return CopyPackageVersionsResponse
     */
    public function copyPackageVersions(CopyPackageVersionsRequest $args)
    {
        $result = parent::copyPackageVersions($args->toArray());
        return new CopyPackageVersionsResponse($result->toArray());
    }
}
