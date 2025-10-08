<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListSuggestedResiliencyPolicies;

trait ListSuggestedResiliencyPoliciesTrait
{
    /**
     * @param ListSuggestedResiliencyPoliciesRequest $args
     * @return ListSuggestedResiliencyPoliciesResponse
     */
    public function listSuggestedResiliencyPolicies(ListSuggestedResiliencyPoliciesRequest $args)
    {
        $result = parent::listSuggestedResiliencyPolicies($args->toArray());
        return new ListSuggestedResiliencyPoliciesResponse($result->toArray());
    }
}
