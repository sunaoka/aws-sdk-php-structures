<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteKnowledgeBaseRefreshSchedule;

trait DeleteKnowledgeBaseRefreshScheduleTrait
{
    /**
     * @param DeleteKnowledgeBaseRefreshScheduleRequest $args
     * @return DeleteKnowledgeBaseRefreshScheduleResponse
     */
    public function deleteKnowledgeBaseRefreshSchedule(DeleteKnowledgeBaseRefreshScheduleRequest $args)
    {
        $result = parent::deleteKnowledgeBaseRefreshSchedule($args->toArray());
        return new DeleteKnowledgeBaseRefreshScheduleResponse($result->toArray());
    }
}
