<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListOriginRequestPolicies;

trait ListOriginRequestPoliciesTrait
{
    /**
     * @param ListOriginRequestPoliciesRequest $args
     * @return ListOriginRequestPoliciesResponse
     */
    public function listOriginRequestPolicies(ListOriginRequestPoliciesRequest $args)
    {
        $result = parent::listOriginRequestPolicies($args->toArray());
        return new ListOriginRequestPoliciesResponse($result->toArray());
    }
}
