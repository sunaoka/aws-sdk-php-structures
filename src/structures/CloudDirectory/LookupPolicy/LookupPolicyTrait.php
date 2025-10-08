<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\LookupPolicy;

trait LookupPolicyTrait
{
    /**
     * @param LookupPolicyRequest $args
     * @return LookupPolicyResponse
     */
    public function lookupPolicy(LookupPolicyRequest $args)
    {
        $result = parent::lookupPolicy($args->toArray());
        return new LookupPolicyResponse($result->toArray());
    }
}
