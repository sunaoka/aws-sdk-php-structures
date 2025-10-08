<?php

namespace Sunaoka\Aws\Structures\Iot\CancelDetectMitigationActionsTask;

trait CancelDetectMitigationActionsTaskTrait
{
    /**
     * @param CancelDetectMitigationActionsTaskRequest $args
     * @return CancelDetectMitigationActionsTaskResponse
     */
    public function cancelDetectMitigationActionsTask(CancelDetectMitigationActionsTaskRequest $args)
    {
        $result = parent::cancelDetectMitigationActionsTask($args->toArray());
        return new CancelDetectMitigationActionsTaskResponse($result->toArray());
    }
}
