<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetScheduledQueryHistory;

trait GetScheduledQueryHistoryTrait
{
    /**
     * @param GetScheduledQueryHistoryRequest $args
     * @return GetScheduledQueryHistoryResponse
     */
    public function getScheduledQueryHistory(GetScheduledQueryHistoryRequest $args)
    {
        $result = parent::getScheduledQueryHistory($args->toArray());
        return new GetScheduledQueryHistoryResponse($result->toArray());
    }
}
