<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDeviceStatistics;

trait GetWirelessDeviceStatisticsTrait
{
    /**
     * @param GetWirelessDeviceStatisticsRequest $args
     * @return GetWirelessDeviceStatisticsResponse
     */
    public function getWirelessDeviceStatistics(GetWirelessDeviceStatisticsRequest $args)
    {
        $result = parent::getWirelessDeviceStatistics($args->toArray());
        return new GetWirelessDeviceStatisticsResponse($result->toArray());
    }
}
