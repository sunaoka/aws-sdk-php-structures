<?php

namespace Sunaoka\Aws\Structures\Iam\ListPolicies;

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
