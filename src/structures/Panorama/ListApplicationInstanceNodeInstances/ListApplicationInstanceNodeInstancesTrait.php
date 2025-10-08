<?php

namespace Sunaoka\Aws\Structures\Panorama\ListApplicationInstanceNodeInstances;

trait ListApplicationInstanceNodeInstancesTrait
{
    /**
     * @param ListApplicationInstanceNodeInstancesRequest $args
     * @return ListApplicationInstanceNodeInstancesResponse
     */
    public function listApplicationInstanceNodeInstances(ListApplicationInstanceNodeInstancesRequest $args)
    {
        $result = parent::listApplicationInstanceNodeInstances($args->toArray());
        return new ListApplicationInstanceNodeInstancesResponse($result->toArray());
    }
}
