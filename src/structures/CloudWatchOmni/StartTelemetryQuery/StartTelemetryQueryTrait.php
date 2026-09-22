<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\StartTelemetryQuery;

trait StartTelemetryQueryTrait
{
    /**
     * @param StartTelemetryQueryRequest $args
     * @return StartTelemetryQueryResponse
     */
    public function startTelemetryQuery(StartTelemetryQueryRequest $args)
    {
        $result = parent::startTelemetryQuery($args->toArray());
        return new StartTelemetryQueryResponse($result->toArray());
    }
}
