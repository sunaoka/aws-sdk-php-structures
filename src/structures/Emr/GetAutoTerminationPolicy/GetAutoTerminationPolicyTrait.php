<?php

namespace Sunaoka\Aws\Structures\Emr\GetAutoTerminationPolicy;

trait GetAutoTerminationPolicyTrait
{
    /**
     * @param GetAutoTerminationPolicyRequest $args
     * @return GetAutoTerminationPolicyResponse
     */
    public function getAutoTerminationPolicy(GetAutoTerminationPolicyRequest $args)
    {
        $result = parent::getAutoTerminationPolicy($args->toArray());
        return new GetAutoTerminationPolicyResponse($result->toArray());
    }
}
