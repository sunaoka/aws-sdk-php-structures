<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DissociatePackage;

trait DissociatePackageTrait
{
    /**
     * @param DissociatePackageRequest $args
     * @return DissociatePackageResponse
     */
    public function dissociatePackage(DissociatePackageRequest $args)
    {
        $result = parent::dissociatePackage($args->toArray());
        return new DissociatePackageResponse($result->toArray());
    }
}
