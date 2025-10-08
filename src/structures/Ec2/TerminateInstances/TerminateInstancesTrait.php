<?php

namespace Sunaoka\Aws\Structures\Ec2\TerminateInstances;

trait TerminateInstancesTrait
{
    /**
     * @param TerminateInstancesRequest $args
     * @return TerminateInstancesResponse
     */
    public function terminateInstances(TerminateInstancesRequest $args)
    {
        $result = parent::terminateInstances($args->toArray());
        return new TerminateInstancesResponse($result->toArray());
    }
}
