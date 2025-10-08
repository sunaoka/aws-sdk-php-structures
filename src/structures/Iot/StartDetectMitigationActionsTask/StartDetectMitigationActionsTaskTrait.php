<?php

namespace Sunaoka\Aws\Structures\Iot\StartDetectMitigationActionsTask;

trait StartDetectMitigationActionsTaskTrait
{
    /**
     * @param StartDetectMitigationActionsTaskRequest $args
     * @return StartDetectMitigationActionsTaskResponse
     */
    public function startDetectMitigationActionsTask(StartDetectMitigationActionsTaskRequest $args)
    {
        $result = parent::startDetectMitigationActionsTask($args->toArray());
        return new StartDetectMitigationActionsTaskResponse($result->toArray());
    }
}
