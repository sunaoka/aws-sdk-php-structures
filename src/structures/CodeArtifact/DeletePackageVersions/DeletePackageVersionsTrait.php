<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DeletePackageVersions;

trait DeletePackageVersionsTrait
{
    /**
     * @param DeletePackageVersionsRequest $args
     * @return DeletePackageVersionsResponse
     */
    public function deletePackageVersions(DeletePackageVersionsRequest $args)
    {
        $result = parent::deletePackageVersions($args->toArray());
        return new DeletePackageVersionsResponse($result->toArray());
    }
}
