<?php

namespace Sunaoka\Aws\Structures\Proton\ListServiceInstances;

trait ListServiceInstancesTrait
{
    /**
     * @param ListServiceInstancesRequest $args
     * @return ListServiceInstancesResponse
     */
    public function listServiceInstances(ListServiceInstancesRequest $args)
    {
        $result = parent::listServiceInstances($args->toArray());
        return new ListServiceInstancesResponse($result->toArray());
    }
}
