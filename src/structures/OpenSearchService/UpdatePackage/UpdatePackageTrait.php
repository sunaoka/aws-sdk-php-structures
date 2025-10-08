<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdatePackage;

trait UpdatePackageTrait
{
    /**
     * @param UpdatePackageRequest $args
     * @return UpdatePackageResponse
     */
    public function updatePackage(UpdatePackageRequest $args)
    {
        $result = parent::updatePackage($args->toArray());
        return new UpdatePackageResponse($result->toArray());
    }
}
