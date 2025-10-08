<?php

namespace Sunaoka\Aws\Structures\EKS\ListAssociatedAccessPolicies;

trait ListAssociatedAccessPoliciesTrait
{
    /**
     * @param ListAssociatedAccessPoliciesRequest $args
     * @return ListAssociatedAccessPoliciesResponse
     */
    public function listAssociatedAccessPolicies(ListAssociatedAccessPoliciesRequest $args)
    {
        $result = parent::listAssociatedAccessPolicies($args->toArray());
        return new ListAssociatedAccessPoliciesResponse($result->toArray());
    }
}
