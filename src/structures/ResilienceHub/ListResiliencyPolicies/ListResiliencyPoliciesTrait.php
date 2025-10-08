<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListResiliencyPolicies;

trait ListResiliencyPoliciesTrait
{
    /**
     * @param ListResiliencyPoliciesRequest $args
     * @return ListResiliencyPoliciesResponse
     */
    public function listResiliencyPolicies(ListResiliencyPoliciesRequest $args)
    {
        $result = parent::listResiliencyPolicies($args->toArray());
        return new ListResiliencyPoliciesResponse($result->toArray());
    }
}
