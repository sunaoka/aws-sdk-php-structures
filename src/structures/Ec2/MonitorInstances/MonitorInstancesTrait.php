<?php

namespace Sunaoka\Aws\Structures\Ec2\MonitorInstances;

trait MonitorInstancesTrait
{
    /**
     * @param MonitorInstancesRequest $args
     * @return MonitorInstancesResponse
     */
    public function monitorInstances(MonitorInstancesRequest $args)
    {
        $result = parent::monitorInstances($args->toArray());
        return new MonitorInstancesResponse($result->toArray());
    }
}
