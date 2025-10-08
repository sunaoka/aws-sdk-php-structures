<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListCachePolicies;

trait ListCachePoliciesTrait
{
    /**
     * @param ListCachePoliciesRequest $args
     * @return ListCachePoliciesResponse
     */
    public function listCachePolicies(ListCachePoliciesRequest $args)
    {
        $result = parent::listCachePolicies($args->toArray());
        return new ListCachePoliciesResponse($result->toArray());
    }
}
