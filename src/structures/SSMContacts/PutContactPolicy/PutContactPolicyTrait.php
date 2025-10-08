<?php

namespace Sunaoka\Aws\Structures\SSMContacts\PutContactPolicy;

trait PutContactPolicyTrait
{
    /**
     * @param PutContactPolicyRequest $args
     * @return PutContactPolicyResponse
     */
    public function putContactPolicy(PutContactPolicyRequest $args)
    {
        $result = parent::putContactPolicy($args->toArray());
        return new PutContactPolicyResponse($result->toArray());
    }
}
