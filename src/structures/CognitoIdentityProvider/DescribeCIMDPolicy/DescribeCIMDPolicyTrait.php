<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeCIMDPolicy;

trait DescribeCIMDPolicyTrait
{
    /**
     * @param DescribeCIMDPolicyRequest $args
     * @return DescribeCIMDPolicyResponse
     */
    public function describeCIMDPolicy(DescribeCIMDPolicyRequest $args)
    {
        $result = parent::describeCIMDPolicy($args->toArray());
        return new DescribeCIMDPolicyResponse($result->toArray());
    }
}
