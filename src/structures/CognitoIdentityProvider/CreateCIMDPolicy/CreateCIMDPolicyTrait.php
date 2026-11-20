<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateCIMDPolicy;

trait CreateCIMDPolicyTrait
{
    /**
     * @param CreateCIMDPolicyRequest $args
     * @return CreateCIMDPolicyResponse
     */
    public function createCIMDPolicy(CreateCIMDPolicyRequest $args)
    {
        $result = parent::createCIMDPolicy($args->toArray());
        return new CreateCIMDPolicyResponse($result->toArray());
    }
}
