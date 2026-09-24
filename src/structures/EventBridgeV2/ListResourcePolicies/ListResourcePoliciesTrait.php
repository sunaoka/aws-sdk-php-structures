<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\ListResourcePolicies;

trait ListResourcePoliciesTrait
{
    /**
     * @param ListResourcePoliciesRequest $args
     * @return ListResourcePoliciesResponse
     */
    public function listResourcePolicies(ListResourcePoliciesRequest $args)
    {
        $result = parent::listResourcePolicies($args->toArray());
        return new ListResourcePoliciesResponse($result->toArray());
    }
}
