<?php

namespace Sunaoka\Aws\Structures\AutoScaling\LaunchInstances;

trait LaunchInstancesTrait
{
    /**
     * @param LaunchInstancesRequest $args
     * @return LaunchInstancesResponse
     */
    public function launchInstances(LaunchInstancesRequest $args)
    {
        $result = parent::launchInstances($args->toArray());
        return new LaunchInstancesResponse($result->toArray());
    }
}
