<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteScheduledQuery;

trait DeleteScheduledQueryTrait
{
    /**
     * @param DeleteScheduledQueryRequest $args
     * @return DeleteScheduledQueryResponse
     */
    public function deleteScheduledQuery(DeleteScheduledQueryRequest $args)
    {
        $result = parent::deleteScheduledQuery($args->toArray());
        return new DeleteScheduledQueryResponse($result->toArray());
    }
}
