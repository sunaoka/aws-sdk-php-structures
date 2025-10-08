<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AssociatePackage;

trait AssociatePackageTrait
{
    /**
     * @param AssociatePackageRequest $args
     * @return AssociatePackageResponse
     */
    public function associatePackage(AssociatePackageRequest $args)
    {
        $result = parent::associatePackage($args->toArray());
        return new AssociatePackageResponse($result->toArray());
    }
}
