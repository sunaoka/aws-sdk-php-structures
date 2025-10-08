<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateContainerInstancesState;

trait UpdateContainerInstancesStateTrait
{
    /**
     * @param UpdateContainerInstancesStateRequest $args
     * @return UpdateContainerInstancesStateResponse
     */
    public function updateContainerInstancesState(UpdateContainerInstancesStateRequest $args)
    {
        $result = parent::updateContainerInstancesState($args->toArray());
        return new UpdateContainerInstancesStateResponse($result->toArray());
    }
}
