<?php

namespace Sunaoka\Aws\Structures\Iam\SimulateCustomPolicy;

trait SimulateCustomPolicyTrait
{
    /**
     * @param SimulateCustomPolicyRequest $args
     * @return SimulateCustomPolicyResponse
     */
    public function simulateCustomPolicy(SimulateCustomPolicyRequest $args)
    {
        $result = parent::simulateCustomPolicy($args->toArray());
        return new SimulateCustomPolicyResponse($result->toArray());
    }
}
