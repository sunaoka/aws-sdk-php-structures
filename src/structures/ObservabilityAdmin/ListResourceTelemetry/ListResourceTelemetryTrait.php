<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListResourceTelemetry;

trait ListResourceTelemetryTrait
{
    /**
     * @param ListResourceTelemetryRequest $args
     * @return ListResourceTelemetryResponse
     */
    public function listResourceTelemetry(ListResourceTelemetryRequest $args)
    {
        $result = parent::listResourceTelemetry($args->toArray());
        return new ListResourceTelemetryResponse($result->toArray());
    }
}
