<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\StopTelemetryQuerySession;

trait StopTelemetryQuerySessionTrait
{
    /**
     * @param StopTelemetryQuerySessionRequest $args
     * @return StopTelemetryQuerySessionResponse
     */
    public function stopTelemetryQuerySession(StopTelemetryQuerySessionRequest $args)
    {
        $result = parent::stopTelemetryQuerySession($args->toArray());
        return new StopTelemetryQuerySessionResponse($result->toArray());
    }
}
