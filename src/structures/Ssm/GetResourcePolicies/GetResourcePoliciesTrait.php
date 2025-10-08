<?php

namespace Sunaoka\Aws\Structures\Ssm\GetResourcePolicies;

trait GetResourcePoliciesTrait
{
    /**
     * @param GetResourcePoliciesRequest $args
     * @return GetResourcePoliciesResponse
     */
    public function getResourcePolicies(GetResourcePoliciesRequest $args)
    {
        $result = parent::getResourcePolicies($args->toArray());
        return new GetResourcePoliciesResponse($result->toArray());
    }
}
