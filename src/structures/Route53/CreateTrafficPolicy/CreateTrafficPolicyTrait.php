<?php

namespace Sunaoka\Aws\Structures\Route53\CreateTrafficPolicy;

trait CreateTrafficPolicyTrait
{
    /**
     * @param CreateTrafficPolicyRequest $args
     * @return CreateTrafficPolicyResponse
     */
    public function createTrafficPolicy(CreateTrafficPolicyRequest $args)
    {
        $result = parent::createTrafficPolicy($args->toArray());
        return new CreateTrafficPolicyResponse($result->toArray());
    }
}
