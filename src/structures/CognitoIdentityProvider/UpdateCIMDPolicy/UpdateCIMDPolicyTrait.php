<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateCIMDPolicy;

trait UpdateCIMDPolicyTrait
{
    /**
     * @param UpdateCIMDPolicyRequest $args
     * @return UpdateCIMDPolicyResponse
     */
    public function updateCIMDPolicy(UpdateCIMDPolicyRequest $args)
    {
        $result = parent::updateCIMDPolicy($args->toArray());
        return new UpdateCIMDPolicyResponse($result->toArray());
    }
}
