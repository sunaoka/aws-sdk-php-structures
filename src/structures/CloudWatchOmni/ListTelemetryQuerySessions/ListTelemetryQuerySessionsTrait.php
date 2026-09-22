<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListTelemetryQuerySessions;

trait ListTelemetryQuerySessionsTrait
{
    /**
     * @param ListTelemetryQuerySessionsRequest $args
     * @return ListTelemetryQuerySessionsResponse
     */
    public function listTelemetryQuerySessions(ListTelemetryQuerySessionsRequest $args)
    {
        $result = parent::listTelemetryQuerySessions($args->toArray());
        return new ListTelemetryQuerySessionsResponse($result->toArray());
    }
}
