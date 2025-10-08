<?php

namespace Sunaoka\Aws\Structures\Iot\UpdatePackageVersion;

trait UpdatePackageVersionTrait
{
    /**
     * @param UpdatePackageVersionRequest $args
     * @return UpdatePackageVersionResponse
     */
    public function updatePackageVersion(UpdatePackageVersionRequest $args)
    {
        $result = parent::updatePackageVersion($args->toArray());
        return new UpdatePackageVersionResponse($result->toArray());
    }
}
