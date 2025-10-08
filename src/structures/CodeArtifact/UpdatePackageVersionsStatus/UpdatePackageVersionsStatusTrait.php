<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\UpdatePackageVersionsStatus;

trait UpdatePackageVersionsStatusTrait
{
    /**
     * @param UpdatePackageVersionsStatusRequest $args
     * @return UpdatePackageVersionsStatusResponse
     */
    public function updatePackageVersionsStatus(UpdatePackageVersionsStatusRequest $args)
    {
        $result = parent::updatePackageVersionsStatus($args->toArray());
        return new UpdatePackageVersionsStatusResponse($result->toArray());
    }
}
