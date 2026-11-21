<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateKnowledgeBaseRefreshSchedule;

trait CreateKnowledgeBaseRefreshScheduleTrait
{
    /**
     * @param CreateKnowledgeBaseRefreshScheduleRequest $args
     * @return CreateKnowledgeBaseRefreshScheduleResponse
     */
    public function createKnowledgeBaseRefreshSchedule(CreateKnowledgeBaseRefreshScheduleRequest $args)
    {
        $result = parent::createKnowledgeBaseRefreshSchedule($args->toArray());
        return new CreateKnowledgeBaseRefreshScheduleResponse($result->toArray());
    }
}
