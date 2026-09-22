<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\StartTelemetryQuerySession;

trait StartTelemetryQuerySessionTrait
{
    /**
     * @param StartTelemetryQuerySessionRequest $args
     * @return StartTelemetryQuerySessionResponse
     */
    public function startTelemetryQuerySession(StartTelemetryQuerySessionRequest $args)
    {
        $result = parent::startTelemetryQuerySession($args->toArray());
        return new StartTelemetryQuerySessionResponse($result->toArray());
    }
}
