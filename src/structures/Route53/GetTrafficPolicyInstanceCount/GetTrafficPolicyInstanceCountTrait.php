<?php

namespace Sunaoka\Aws\Structures\Route53\GetTrafficPolicyInstanceCount;

trait GetTrafficPolicyInstanceCountTrait
{
    /**
     * @param GetTrafficPolicyInstanceCountRequest $args
     * @return GetTrafficPolicyInstanceCountResponse
     */
    public function getTrafficPolicyInstanceCount(GetTrafficPolicyInstanceCountRequest $args)
    {
        $result = parent::getTrafficPolicyInstanceCount($args->toArray());
        return new GetTrafficPolicyInstanceCountResponse($result->toArray());
    }
}
