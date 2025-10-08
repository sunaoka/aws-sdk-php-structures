<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory;

trait GetWorkflowExecutionHistoryTrait
{
    /**
     * @param GetWorkflowExecutionHistoryRequest $args
     * @return GetWorkflowExecutionHistoryResponse
     */
    public function getWorkflowExecutionHistory(GetWorkflowExecutionHistoryRequest $args)
    {
        $result = parent::getWorkflowExecutionHistory($args->toArray());
        return new GetWorkflowExecutionHistoryResponse($result->toArray());
    }
}
