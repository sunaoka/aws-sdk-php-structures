<?php

namespace Sunaoka\Aws\Structures\Iam\ListGroupPolicies;

trait ListGroupPoliciesTrait
{
    /**
     * @param ListGroupPoliciesRequest $args
     * @return ListGroupPoliciesResponse
     */
    public function listGroupPolicies(ListGroupPoliciesRequest $args)
    {
        $result = parent::listGroupPolicies($args->toArray());
        return new ListGroupPoliciesResponse($result->toArray());
    }
}
