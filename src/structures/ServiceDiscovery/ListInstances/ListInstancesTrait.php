<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\ListInstances;

trait ListInstancesTrait
{
    /**
     * @param ListInstancesRequest $args
     * @return ListInstancesResponse
     */
    public function listInstances(ListInstancesRequest $args)
    {
        $result = parent::listInstances($args->toArray());
        return new ListInstancesResponse($result->toArray());
    }
}
