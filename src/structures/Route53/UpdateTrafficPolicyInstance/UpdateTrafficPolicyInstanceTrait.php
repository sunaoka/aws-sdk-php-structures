<?php

namespace Sunaoka\Aws\Structures\Route53\UpdateTrafficPolicyInstance;

trait UpdateTrafficPolicyInstanceTrait
{
    /**
     * @param UpdateTrafficPolicyInstanceRequest $args
     * @return UpdateTrafficPolicyInstanceResponse
     */
    public function updateTrafficPolicyInstance(UpdateTrafficPolicyInstanceRequest $args)
    {
        $result = parent::updateTrafficPolicyInstance($args->toArray());
        return new UpdateTrafficPolicyInstanceResponse($result->toArray());
    }
}
