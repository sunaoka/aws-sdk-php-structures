<?php

namespace Sunaoka\Aws\Structures\Swf\CountPendingDecisionTasks;

trait CountPendingDecisionTasksTrait
{
    /**
     * @param CountPendingDecisionTasksRequest $args
     * @return CountPendingDecisionTasksResponse
     */
    public function countPendingDecisionTasks(CountPendingDecisionTasksRequest $args)
    {
        $result = parent::countPendingDecisionTasks($args->toArray());
        return new CountPendingDecisionTasksResponse($result->toArray());
    }
}
