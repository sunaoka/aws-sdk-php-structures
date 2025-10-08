<?php

namespace Sunaoka\Aws\Structures\MPA\ListPolicies;

trait ListPoliciesTrait
{
    /**
     * @param ListPoliciesRequest $args
     * @return ListPoliciesResponse
     */
    public function listPolicies(ListPoliciesRequest $args)
    {
        $result = parent::listPolicies($args->toArray());
        return new ListPoliciesResponse($result->toArray());
    }
}
