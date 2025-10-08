<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\ListVpcEndpointsForDomain;

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
