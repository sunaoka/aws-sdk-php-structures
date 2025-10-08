<?php

namespace Sunaoka\Aws\Structures\Iot\GetPackage;

trait GetPackageTrait
{
    /**
     * @param GetPackageRequest $args
     * @return GetPackageResponse
     */
    public function getPackage(GetPackageRequest $args)
    {
        $result = parent::getPackage($args->toArray());
        return new GetPackageResponse($result->toArray());
    }
}
