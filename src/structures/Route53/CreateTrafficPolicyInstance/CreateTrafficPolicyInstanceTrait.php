<?php

namespace Sunaoka\Aws\Structures\Route53\CreateTrafficPolicyInstance;

trait CreateTrafficPolicyInstanceTrait
{
    /**
     * @param CreateTrafficPolicyInstanceRequest $args
     * @return CreateTrafficPolicyInstanceResponse
     */
    public function createTrafficPolicyInstance(CreateTrafficPolicyInstanceRequest $args)
    {
        $result = parent::createTrafficPolicyInstance($args->toArray());
        return new CreateTrafficPolicyInstanceResponse($result->toArray());
    }
}
