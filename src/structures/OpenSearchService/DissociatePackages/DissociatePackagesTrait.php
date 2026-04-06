<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DissociatePackages;

trait DissociatePackagesTrait
{
    /**
     * @param DissociatePackagesRequest $args
     * @return DissociatePackagesResponse
     */
    public function dissociatePackages(DissociatePackagesRequest $args)
    {
        $result = parent::dissociatePackages($args->toArray());
        return new DissociatePackagesResponse($result->toArray());
    }
}
