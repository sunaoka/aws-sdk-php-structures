<?php

namespace Sunaoka\Aws\Structures\Panorama\ListApplicationInstances;

trait ListApplicationInstancesTrait
{
    /**
     * @param ListApplicationInstancesRequest $args
     * @return ListApplicationInstancesResponse
     */
    public function listApplicationInstances(ListApplicationInstancesRequest $args)
    {
        $result = parent::listApplicationInstances($args->toArray());
        return new ListApplicationInstancesResponse($result->toArray());
    }
}
