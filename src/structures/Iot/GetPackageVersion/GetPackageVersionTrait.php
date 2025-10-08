<?php

namespace Sunaoka\Aws\Structures\Iot\GetPackageVersion;

trait GetPackageVersionTrait
{
    /**
     * @param GetPackageVersionRequest $args
     * @return GetPackageVersionResponse
     */
    public function getPackageVersion(GetPackageVersionRequest $args)
    {
        $result = parent::getPackageVersion($args->toArray());
        return new GetPackageVersionResponse($result->toArray());
    }
}
