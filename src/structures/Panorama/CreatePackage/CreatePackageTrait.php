<?php

namespace Sunaoka\Aws\Structures\Panorama\CreatePackage;

trait CreatePackageTrait
{
    /**
     * @param CreatePackageRequest $args
     * @return CreatePackageResponse
     */
    public function createPackage(CreatePackageRequest $args)
    {
        $result = parent::createPackage($args->toArray());
        return new CreatePackageResponse($result->toArray());
    }
}
