<?php

namespace Sunaoka\Aws\Structures\Route53\DeleteTrafficPolicyInstance;

trait DeleteTrafficPolicyInstanceTrait
{
    /**
     * @param DeleteTrafficPolicyInstanceRequest $args
     * @return DeleteTrafficPolicyInstanceResponse
     */
    public function deleteTrafficPolicyInstance(DeleteTrafficPolicyInstanceRequest $args)
    {
        $result = parent::deleteTrafficPolicyInstance($args->toArray());
        return new DeleteTrafficPolicyInstanceResponse($result->toArray());
    }
}
