<?php

namespace Sunaoka\Aws\Structures\Iam\GetGroupPolicy;

trait GetGroupPolicyTrait
{
    /**
     * @param GetGroupPolicyRequest $args
     * @return GetGroupPolicyResponse
     */
    public function getGroupPolicy(GetGroupPolicyRequest $args)
    {
        $result = parent::getGroupPolicy($args->toArray());
        return new GetGroupPolicyResponse($result->toArray());
    }
}
