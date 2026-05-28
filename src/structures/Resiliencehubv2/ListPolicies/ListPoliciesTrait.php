<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListPolicies;

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
