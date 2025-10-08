<?php

namespace Sunaoka\Aws\Structures\Ec2\StartInstances;

trait StartInstancesTrait
{
    /**
     * @param StartInstancesRequest $args
     * @return StartInstancesResponse
     */
    public function startInstances(StartInstancesRequest $args)
    {
        $result = parent::startInstances($args->toArray());
        return new StartInstancesResponse($result->toArray());
    }
}
