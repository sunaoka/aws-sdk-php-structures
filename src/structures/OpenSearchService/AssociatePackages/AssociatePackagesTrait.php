<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AssociatePackages;

trait AssociatePackagesTrait
{
    /**
     * @param AssociatePackagesRequest $args
     * @return AssociatePackagesResponse
     */
    public function associatePackages(AssociatePackagesRequest $args)
    {
        $result = parent::associatePackages($args->toArray());
        return new AssociatePackagesResponse($result->toArray());
    }
}
