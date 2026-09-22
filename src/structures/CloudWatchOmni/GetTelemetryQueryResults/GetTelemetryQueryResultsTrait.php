<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetTelemetryQueryResults;

trait GetTelemetryQueryResultsTrait
{
    /**
     * @param GetTelemetryQueryResultsRequest $args
     * @return GetTelemetryQueryResultsResponse
     */
    public function getTelemetryQueryResults(GetTelemetryQueryResultsRequest $args)
    {
        $result = parent::getTelemetryQueryResults($args->toArray());
        return new GetTelemetryQueryResultsResponse($result->toArray());
    }
}
