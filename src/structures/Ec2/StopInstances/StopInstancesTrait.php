<?php

namespace Sunaoka\Aws\Structures\Ec2\StopInstances;

trait StopInstancesTrait
{
    /**
     * @param StopInstancesRequest $args
     * @return StopInstancesResponse
     */
    public function stopInstances(StopInstancesRequest $args)
    {
        $result = parent::stopInstances($args->toArray());
        return new StopInstancesResponse($result->toArray());
    }
}
