<?php

namespace Sunaoka\Aws\Structures\Iam\ListEntitiesForPolicy;

trait ListEntitiesForPolicyTrait
{
    /**
     * @param ListEntitiesForPolicyRequest $args
     * @return ListEntitiesForPolicyResponse
     */
    public function listEntitiesForPolicy(ListEntitiesForPolicyRequest $args)
    {
        $result = parent::listEntitiesForPolicy($args->toArray());
        return new ListEntitiesForPolicyResponse($result->toArray());
    }
}
