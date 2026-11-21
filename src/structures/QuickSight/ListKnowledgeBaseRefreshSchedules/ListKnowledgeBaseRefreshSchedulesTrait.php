<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListKnowledgeBaseRefreshSchedules;

trait ListKnowledgeBaseRefreshSchedulesTrait
{
    /**
     * @param ListKnowledgeBaseRefreshSchedulesRequest $args
     * @return ListKnowledgeBaseRefreshSchedulesResponse
     */
    public function listKnowledgeBaseRefreshSchedules(ListKnowledgeBaseRefreshSchedulesRequest $args)
    {
        $result = parent::listKnowledgeBaseRefreshSchedules($args->toArray());
        return new ListKnowledgeBaseRefreshSchedulesResponse($result->toArray());
    }
}
