<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetScheduledQuery;

trait GetScheduledQueryTrait
{
    /**
     * @param GetScheduledQueryRequest $args
     * @return GetScheduledQueryResponse
     */
    public function getScheduledQuery(GetScheduledQueryRequest $args)
    {
        $result = parent::getScheduledQuery($args->toArray());
        return new GetScheduledQueryResponse($result->toArray());
    }
}
