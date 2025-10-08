<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreatePackage;

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
