<?php

namespace Sunaoka\Aws\Structures\Inspector2\SendCisSessionTelemetry;

trait SendCisSessionTelemetryTrait
{
    /**
     * @param SendCisSessionTelemetryRequest $args
     * @return SendCisSessionTelemetryResponse
     */
    public function sendCisSessionTelemetry(SendCisSessionTelemetryRequest $args)
    {
        $result = parent::sendCisSessionTelemetry($args->toArray());
        return new SendCisSessionTelemetryResponse($result->toArray());
    }
}
