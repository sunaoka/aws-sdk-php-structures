<?php

namespace Sunaoka\Aws\Structures\Iot\ListDetectMitigationActionsTasks;

trait ListDetectMitigationActionsTasksTrait
{
    /**
     * @param ListDetectMitigationActionsTasksRequest $args
     * @return ListDetectMitigationActionsTasksResponse
     */
    public function listDetectMitigationActionsTasks(ListDetectMitigationActionsTasksRequest $args)
    {
        $result = parent::listDetectMitigationActionsTasks($args->toArray());
        return new ListDetectMitigationActionsTasksResponse($result->toArray());
    }
}
