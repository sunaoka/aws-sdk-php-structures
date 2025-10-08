<?php

namespace Sunaoka\Aws\Structures\Route53\ListTrafficPolicies;

trait ListTrafficPoliciesTrait
{
    /**
     * @param ListTrafficPoliciesRequest $args
     * @return ListTrafficPoliciesResponse
     */
    public function listTrafficPolicies(ListTrafficPoliciesRequest $args)
    {
        $result = parent::listTrafficPolicies($args->toArray());
        return new ListTrafficPoliciesResponse($result->toArray());
    }
}
