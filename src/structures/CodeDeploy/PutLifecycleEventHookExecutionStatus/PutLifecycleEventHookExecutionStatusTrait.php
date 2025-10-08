<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\PutLifecycleEventHookExecutionStatus;

trait PutLifecycleEventHookExecutionStatusTrait
{
    /**
     * @param PutLifecycleEventHookExecutionStatusRequest $args
     * @return PutLifecycleEventHookExecutionStatusResponse
     */
    public function putLifecycleEventHookExecutionStatus(PutLifecycleEventHookExecutionStatusRequest $args)
    {
        $result = parent::putLifecycleEventHookExecutionStatus($args->toArray());
        return new PutLifecycleEventHookExecutionStatusResponse($result->toArray());
    }
}
