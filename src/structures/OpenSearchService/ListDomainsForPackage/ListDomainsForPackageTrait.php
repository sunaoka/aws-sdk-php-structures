<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListDomainsForPackage;

trait ListDomainsForPackageTrait
{
    /**
     * @param ListDomainsForPackageRequest $args
     * @return ListDomainsForPackageResponse
     */
    public function listDomainsForPackage(ListDomainsForPackageRequest $args)
    {
        $result = parent::listDomainsForPackage($args->toArray());
        return new ListDomainsForPackageResponse($result->toArray());
    }
}
