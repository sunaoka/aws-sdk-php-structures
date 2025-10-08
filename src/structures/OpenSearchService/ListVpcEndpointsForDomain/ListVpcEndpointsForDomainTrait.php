<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListVpcEndpointsForDomain;

trait ListVpcEndpointsForDomainTrait
{
    /**
     * @param ListVpcEndpointsForDomainRequest $args
     * @return ListVpcEndpointsForDomainResponse
     */
    public function listVpcEndpointsForDomain(ListVpcEndpointsForDomainRequest $args)
    {
        $result = parent::listVpcEndpointsForDomain($args->toArray());
        return new ListVpcEndpointsForDomainResponse($result->toArray());
    }
}
