<?php

namespace Sunaoka\Aws\Structures\Ecs\ListContainerInstances;

trait ListContainerInstancesTrait
{
    /**
     * @param ListContainerInstancesRequest $args
     * @return ListContainerInstancesResponse
     */
    public function listContainerInstances(ListContainerInstancesRequest $args)
    {
        $result = parent::listContainerInstances($args->toArray());
        return new ListContainerInstancesResponse($result->toArray());
    }
}
