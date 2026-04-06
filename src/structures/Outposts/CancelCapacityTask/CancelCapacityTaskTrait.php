<?php

namespace Sunaoka\Aws\Structures\Outposts\CancelCapacityTask;

trait CancelCapacityTaskTrait
{
    /**
     * @param CancelCapacityTaskRequest $args
     * @return CancelCapacityTaskResponse
     */
    public function cancelCapacityTask(CancelCapacityTaskRequest $args)
    {
        $result = parent::cancelCapacityTask($args->toArray());
        return new CancelCapacityTaskResponse($result->toArray());
    }
}
