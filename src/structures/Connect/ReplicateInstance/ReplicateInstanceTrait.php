<?php

namespace Sunaoka\Aws\Structures\Connect\ReplicateInstance;

trait ReplicateInstanceTrait
{
    /**
     * @param ReplicateInstanceRequest $args
     * @return ReplicateInstanceResponse
     */
    public function replicateInstance(ReplicateInstanceRequest $args)
    {
        $result = parent::replicateInstance($args->toArray());
        return new ReplicateInstanceResponse($result->toArray());
    }
}
