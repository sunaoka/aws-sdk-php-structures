<?php

namespace Sunaoka\Aws\Structures\Outposts\ListBlockingInstancesForCapacityTask;

trait ListBlockingInstancesForCapacityTaskTrait
{
    /**
     * @param ListBlockingInstancesForCapacityTaskRequest $args
     * @return ListBlockingInstancesForCapacityTaskResponse
     */
    public function listBlockingInstancesForCapacityTask(ListBlockingInstancesForCapacityTaskRequest $args)
    {
        $result = parent::listBlockingInstancesForCapacityTask($args->toArray());
        return new ListBlockingInstancesForCapacityTaskResponse($result->toArray());
    }
}
