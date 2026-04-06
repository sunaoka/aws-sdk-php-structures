<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListAggregateLogGroupSummaries;

trait ListAggregateLogGroupSummariesTrait
{
    /**
     * @param ListAggregateLogGroupSummariesRequest $args
     * @return ListAggregateLogGroupSummariesResponse
     */
    public function listAggregateLogGroupSummaries(ListAggregateLogGroupSummariesRequest $args)
    {
        $result = parent::listAggregateLogGroupSummaries($args->toArray());
        return new ListAggregateLogGroupSummariesResponse($result->toArray());
    }
}
