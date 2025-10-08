<?php

namespace Sunaoka\Aws\Structures\Batch\CreateSchedulingPolicy;

trait CreateSchedulingPolicyTrait
{
    /**
     * @param CreateSchedulingPolicyRequest $args
     * @return CreateSchedulingPolicyResponse
     */
    public function createSchedulingPolicy(CreateSchedulingPolicyRequest $args)
    {
        $result = parent::createSchedulingPolicy($args->toArray());
        return new CreateSchedulingPolicyResponse($result->toArray());
    }
}
