<?php

namespace Sunaoka\Aws\Structures\Panorama\DeregisterPackageVersion;

trait DeregisterPackageVersionTrait
{
    /**
     * @param DeregisterPackageVersionRequest $args
     * @return DeregisterPackageVersionResponse
     */
    public function deregisterPackageVersion(DeregisterPackageVersionRequest $args)
    {
        $result = parent::deregisterPackageVersion($args->toArray());
        return new DeregisterPackageVersionResponse($result->toArray());
    }
}
