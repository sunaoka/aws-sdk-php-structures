<?php

namespace Sunaoka\Aws\Structures\Batch\DeleteSchedulingPolicy;

trait DeleteSchedulingPolicyTrait
{
    /**
     * @param DeleteSchedulingPolicyRequest $args
     * @return DeleteSchedulingPolicyResponse
     */
    public function deleteSchedulingPolicy(DeleteSchedulingPolicyRequest $args)
    {
        $result = parent::deleteSchedulingPolicy($args->toArray());
        return new DeleteSchedulingPolicyResponse($result->toArray());
    }
}
