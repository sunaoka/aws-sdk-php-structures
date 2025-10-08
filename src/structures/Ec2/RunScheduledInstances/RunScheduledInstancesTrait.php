<?php

namespace Sunaoka\Aws\Structures\Ec2\RunScheduledInstances;

trait RunScheduledInstancesTrait
{
    /**
     * @param RunScheduledInstancesRequest $args
     * @return RunScheduledInstancesResponse
     */
    public function runScheduledInstances(RunScheduledInstancesRequest $args)
    {
        $result = parent::runScheduledInstances($args->toArray());
        return new RunScheduledInstancesResponse($result->toArray());
    }
}
