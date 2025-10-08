<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\ListPackagesForDomain;

trait ListPackagesForDomainTrait
{
    /**
     * @param ListPackagesForDomainRequest $args
     * @return ListPackagesForDomainResponse
     */
    public function listPackagesForDomain(ListPackagesForDomainRequest $args)
    {
        $result = parent::listPackagesForDomain($args->toArray());
        return new ListPackagesForDomainResponse($result->toArray());
    }
}
