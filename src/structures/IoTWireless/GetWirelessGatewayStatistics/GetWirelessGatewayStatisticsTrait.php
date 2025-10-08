<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessGatewayStatistics;

trait GetWirelessGatewayStatisticsTrait
{
    /**
     * @param GetWirelessGatewayStatisticsRequest $args
     * @return GetWirelessGatewayStatisticsResponse
     */
    public function getWirelessGatewayStatistics(GetWirelessGatewayStatisticsRequest $args)
    {
        $result = parent::getWirelessGatewayStatistics($args->toArray());
        return new GetWirelessGatewayStatisticsResponse($result->toArray());
    }
}
