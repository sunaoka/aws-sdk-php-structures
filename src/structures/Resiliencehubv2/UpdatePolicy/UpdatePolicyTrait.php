<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\UpdatePolicy;

trait UpdatePolicyTrait
{
    /**
     * @param UpdatePolicyRequest $args
     * @return UpdatePolicyResponse
     */
    public function updatePolicy(UpdatePolicyRequest $args)
    {
        $result = parent::updatePolicy($args->toArray());
        return new UpdatePolicyResponse($result->toArray());
    }
}
