<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListSyncResources;

trait ListSyncResourcesTrait
{
    /**
     * @param ListSyncResourcesRequest $args
     * @return ListSyncResourcesResponse
     */
    public function listSyncResources(ListSyncResourcesRequest $args)
    {
        $result = parent::listSyncResources($args->toArray());
        return new ListSyncResourcesResponse($result->toArray());
    }
}
