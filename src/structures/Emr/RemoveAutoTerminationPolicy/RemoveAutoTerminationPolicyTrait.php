<?php

namespace Sunaoka\Aws\Structures\Emr\RemoveAutoTerminationPolicy;

trait RemoveAutoTerminationPolicyTrait
{
    /**
     * @param RemoveAutoTerminationPolicyRequest $args
     * @return RemoveAutoTerminationPolicyResponse
     */
    public function removeAutoTerminationPolicy(RemoveAutoTerminationPolicyRequest $args)
    {
        $result = parent::removeAutoTerminationPolicy($args->toArray());
        return new RemoveAutoTerminationPolicyResponse($result->toArray());
    }
}
