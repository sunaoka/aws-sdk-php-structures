<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances;

trait RunInstancesTrait
{
    /**
     * @param RunInstancesRequest $args
     * @return RunInstancesResponse
     */
    public function runInstances(RunInstancesRequest $args)
    {
        $result = parent::runInstances($args->toArray());
        return new RunInstancesResponse($result->toArray());
    }
}
