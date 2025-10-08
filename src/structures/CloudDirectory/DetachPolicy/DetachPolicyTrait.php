<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\DetachPolicy;

trait DetachPolicyTrait
{
    /**
     * @param DetachPolicyRequest $args
     * @return DetachPolicyResponse
     */
    public function detachPolicy(DetachPolicyRequest $args)
    {
        $result = parent::detachPolicy($args->toArray());
        return new DetachPolicyResponse($result->toArray());
    }
}
