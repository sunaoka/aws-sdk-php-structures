<?php

namespace Sunaoka\Aws\Structures\Iam\ListUserPolicies;

trait ListUserPoliciesTrait
{
    /**
     * @param ListUserPoliciesRequest $args
     * @return ListUserPoliciesResponse
     */
    public function listUserPolicies(ListUserPoliciesRequest $args)
    {
        $result = parent::listUserPolicies($args->toArray());
        return new ListUserPoliciesResponse($result->toArray());
    }
}
