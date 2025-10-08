<?php

namespace Sunaoka\Aws\Structures\Panorama\RegisterPackageVersion;

trait RegisterPackageVersionTrait
{
    /**
     * @param RegisterPackageVersionRequest $args
     * @return RegisterPackageVersionResponse
     */
    public function registerPackageVersion(RegisterPackageVersionRequest $args)
    {
        $result = parent::registerPackageVersion($args->toArray());
        return new RegisterPackageVersionResponse($result->toArray());
    }
}
