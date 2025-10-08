<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListMonitoredResources;

trait ListMonitoredResourcesTrait
{
    /**
     * @param ListMonitoredResourcesRequest $args
     * @return ListMonitoredResourcesResponse
     */
    public function listMonitoredResources(ListMonitoredResourcesRequest $args)
    {
        $result = parent::listMonitoredResources($args->toArray());
        return new ListMonitoredResourcesResponse($result->toArray());
    }
}
