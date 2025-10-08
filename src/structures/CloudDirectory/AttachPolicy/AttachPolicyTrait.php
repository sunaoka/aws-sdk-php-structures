<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\AttachPolicy;

trait AttachPolicyTrait
{
    /**
     * @param AttachPolicyRequest $args
     * @return AttachPolicyResponse
     */
    public function attachPolicy(AttachPolicyRequest $args)
    {
        $result = parent::attachPolicy($args->toArray());
        return new AttachPolicyResponse($result->toArray());
    }
}
