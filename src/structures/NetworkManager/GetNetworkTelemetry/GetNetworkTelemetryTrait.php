<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkTelemetry;

trait GetNetworkTelemetryTrait
{
    /**
     * @param GetNetworkTelemetryRequest $args
     * @return GetNetworkTelemetryResponse
     */
    public function getNetworkTelemetry(GetNetworkTelemetryRequest $args)
    {
        $result = parent::getNetworkTelemetry($args->toArray());
        return new GetNetworkTelemetryResponse($result->toArray());
    }
}
