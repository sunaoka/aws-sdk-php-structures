<?php

namespace Sunaoka\Aws\Structures\Route53\GetTrafficPolicyInstance;

trait GetTrafficPolicyInstanceTrait
{
    /**
     * @param GetTrafficPolicyInstanceRequest $args
     * @return GetTrafficPolicyInstanceResponse
     */
    public function getTrafficPolicyInstance(GetTrafficPolicyInstanceRequest $args)
    {
        $result = parent::getTrafficPolicyInstance($args->toArray());
        return new GetTrafficPolicyInstanceResponse($result->toArray());
    }
}
