<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListLifecyclePolicies;

trait ListLifecyclePoliciesTrait
{
    /**
     * @param ListLifecyclePoliciesRequest $args
     * @return ListLifecyclePoliciesResponse
     */
    public function listLifecyclePolicies(ListLifecyclePoliciesRequest $args)
    {
        $result = parent::listLifecyclePolicies($args->toArray());
        return new ListLifecyclePoliciesResponse($result->toArray());
    }
}
