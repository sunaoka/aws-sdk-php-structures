<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\StopQuery;

trait StopQueryTrait
{
    /**
     * @param StopQueryRequest $args
     * @return StopQueryResponse
     */
    public function stopQuery(StopQueryRequest $args)
    {
        $result = parent::stopQuery($args->toArray());
        return new StopQueryResponse($result->toArray());
    }
}
