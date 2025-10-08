<?php

namespace Sunaoka\Aws\Structures\DLM\GetLifecyclePolicies;

trait GetLifecyclePoliciesTrait
{
    /**
     * @param GetLifecyclePoliciesRequest $args
     * @return GetLifecyclePoliciesResponse
     */
    public function getLifecyclePolicies(GetLifecyclePoliciesRequest $args)
    {
        $result = parent::getLifecyclePolicies($args->toArray());
        return new GetLifecyclePoliciesResponse($result->toArray());
    }
}
