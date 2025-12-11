<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\UpdateScheduledQuery;

trait UpdateScheduledQueryTrait
{
    /**
     * @param UpdateScheduledQueryRequest $args
     * @return UpdateScheduledQueryResponse
     */
    public function updateScheduledQuery(UpdateScheduledQueryRequest $args)
    {
        $result = parent::updateScheduledQuery($args->toArray());
        return new UpdateScheduledQueryResponse($result->toArray());
    }
}
