<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListLogGroupsForQuery;

trait ListLogGroupsForQueryTrait
{
    /**
     * @param ListLogGroupsForQueryRequest $args
     * @return ListLogGroupsForQueryResponse
     */
    public function listLogGroupsForQuery(ListLogGroupsForQueryRequest $args)
    {
        $result = parent::listLogGroupsForQuery($args->toArray());
        return new ListLogGroupsForQueryResponse($result->toArray());
    }
}
