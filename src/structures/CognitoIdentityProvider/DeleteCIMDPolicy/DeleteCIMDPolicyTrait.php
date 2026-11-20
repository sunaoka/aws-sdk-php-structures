<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DeleteCIMDPolicy;

trait DeleteCIMDPolicyTrait
{
    /**
     * @param DeleteCIMDPolicyRequest $args
     * @return DeleteCIMDPolicyResponse
     */
    public function deleteCIMDPolicy(DeleteCIMDPolicyRequest $args)
    {
        $result = parent::deleteCIMDPolicy($args->toArray());
        return new DeleteCIMDPolicyResponse($result->toArray());
    }
}
