<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\CancelTask;

trait CancelTaskTrait
{
    /**
     * @param CancelTaskRequest $args
     * @return CancelTaskResponse
     */
    public function cancelTask(CancelTaskRequest $args)
    {
        $result = parent::cancelTask($args->toArray());
        return new CancelTaskResponse($result->toArray());
    }
}
