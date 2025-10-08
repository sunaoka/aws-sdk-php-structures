<?php

namespace Sunaoka\Aws\Structures\Iot\CreatePackageVersion;

trait CreatePackageVersionTrait
{
    /**
     * @param CreatePackageVersionRequest $args
     * @return CreatePackageVersionResponse
     */
    public function createPackageVersion(CreatePackageVersionRequest $args)
    {
        $result = parent::createPackageVersion($args->toArray());
        return new CreatePackageVersionResponse($result->toArray());
    }
}
