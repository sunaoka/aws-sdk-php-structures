<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\GetPolicy;

trait GetPolicyTrait
{
    /**
     * @param GetPolicyRequest $args
     * @return GetPolicyResponse
     */
    public function getPolicy(GetPolicyRequest $args)
    {
        $result = parent::getPolicy($args->toArray());
        return new GetPolicyResponse($result->toArray());
    }
}
