<?php

namespace Sunaoka\Aws\Structures\Iot\ListDetectMitigationActionsExecutions;

trait ListDetectMitigationActionsExecutionsTrait
{
    /**
     * @param ListDetectMitigationActionsExecutionsRequest $args
     * @return ListDetectMitigationActionsExecutionsResponse
     */
    public function listDetectMitigationActionsExecutions(ListDetectMitigationActionsExecutionsRequest $args)
    {
        $result = parent::listDetectMitigationActionsExecutions($args->toArray());
        return new ListDetectMitigationActionsExecutionsResponse($result->toArray());
    }
}
