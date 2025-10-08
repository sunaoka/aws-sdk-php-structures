<?php

namespace Sunaoka\Aws\Structures\Ses\PutIdentityPolicy;

trait PutIdentityPolicyTrait
{
    /**
     * @param PutIdentityPolicyRequest $args
     * @return PutIdentityPolicyResponse
     */
    public function putIdentityPolicy(PutIdentityPolicyRequest $args)
    {
        $result = parent::putIdentityPolicy($args->toArray());
        return new PutIdentityPolicyResponse($result->toArray());
    }
}
