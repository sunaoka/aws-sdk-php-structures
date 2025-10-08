<?php

namespace Sunaoka\Aws\Structures\Ssm\DeregisterManagedInstance;

trait DeregisterManagedInstanceTrait
{
    /**
     * @param DeregisterManagedInstanceRequest $args
     * @return DeregisterManagedInstanceResponse
     */
    public function deregisterManagedInstance(DeregisterManagedInstanceRequest $args)
    {
        $result = parent::deregisterManagedInstance($args->toArray());
        return new DeregisterManagedInstanceResponse($result->toArray());
    }
}
