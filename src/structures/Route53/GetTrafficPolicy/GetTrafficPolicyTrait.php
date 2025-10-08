<?php

namespace Sunaoka\Aws\Structures\Route53\GetTrafficPolicy;

trait GetTrafficPolicyTrait
{
    /**
     * @param GetTrafficPolicyRequest $args
     * @return GetTrafficPolicyResponse
     */
    public function getTrafficPolicy(GetTrafficPolicyRequest $args)
    {
        $result = parent::getTrafficPolicy($args->toArray());
        return new GetTrafficPolicyResponse($result->toArray());
    }
}
