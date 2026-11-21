<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateKnowledgeBaseRefreshSchedule;

trait UpdateKnowledgeBaseRefreshScheduleTrait
{
    /**
     * @param UpdateKnowledgeBaseRefreshScheduleRequest $args
     * @return UpdateKnowledgeBaseRefreshScheduleResponse
     */
    public function updateKnowledgeBaseRefreshSchedule(UpdateKnowledgeBaseRefreshScheduleRequest $args)
    {
        $result = parent::updateKnowledgeBaseRefreshSchedule($args->toArray());
        return new UpdateKnowledgeBaseRefreshScheduleResponse($result->toArray());
    }
}
