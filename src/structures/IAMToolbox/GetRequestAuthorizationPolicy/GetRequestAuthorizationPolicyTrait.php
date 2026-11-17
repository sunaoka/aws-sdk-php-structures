<?php

namespace Sunaoka\Aws\Structures\IAMToolbox\GetRequestAuthorizationPolicy;

trait GetRequestAuthorizationPolicyTrait
{
    /**
     * @param GetRequestAuthorizationPolicyRequest $args
     * @return GetRequestAuthorizationPolicyResponse
     */
    public function getRequestAuthorizationPolicy(GetRequestAuthorizationPolicyRequest $args)
    {
        $result = parent::getRequestAuthorizationPolicy($args->toArray());
        return new GetRequestAuthorizationPolicyResponse($result->toArray());
    }
}
