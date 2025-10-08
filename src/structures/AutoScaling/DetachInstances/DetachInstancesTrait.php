<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DetachInstances;

trait DetachInstancesTrait
{
    /**
     * @param DetachInstancesRequest $args
     * @return DetachInstancesResponse
     */
    public function detachInstances(DetachInstancesRequest $args)
    {
        $result = parent::detachInstances($args->toArray());
        return new DetachInstancesResponse($result->toArray());
    }
}
