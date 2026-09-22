<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\StopTelemetryQuery;

trait StopTelemetryQueryTrait
{
    /**
     * @param StopTelemetryQueryRequest $args
     * @return StopTelemetryQueryResponse
     */
    public function stopTelemetryQuery(StopTelemetryQueryRequest $args)
    {
        $result = parent::stopTelemetryQuery($args->toArray());
        return new StopTelemetryQueryResponse($result->toArray());
    }
}
