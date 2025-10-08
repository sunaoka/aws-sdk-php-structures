<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateSchedulingPolicy;

trait UpdateSchedulingPolicyTrait
{
    /**
     * @param UpdateSchedulingPolicyRequest $args
     * @return UpdateSchedulingPolicyResponse
     */
    public function updateSchedulingPolicy(UpdateSchedulingPolicyRequest $args)
    {
        $result = parent::updateSchedulingPolicy($args->toArray());
        return new UpdateSchedulingPolicyResponse($result->toArray());
    }
}
