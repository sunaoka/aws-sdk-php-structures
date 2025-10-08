<?php

namespace Sunaoka\Aws\Structures\Iam\GetUserPolicy;

trait GetUserPolicyTrait
{
    /**
     * @param GetUserPolicyRequest $args
     * @return GetUserPolicyResponse
     */
    public function getUserPolicy(GetUserPolicyRequest $args)
    {
        $result = parent::getUserPolicy($args->toArray());
        return new GetUserPolicyResponse($result->toArray());
    }
}
