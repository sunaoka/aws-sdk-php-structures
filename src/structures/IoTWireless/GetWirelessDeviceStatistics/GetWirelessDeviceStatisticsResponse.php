<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDeviceStatistics;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $WirelessDeviceId
 * @property string $LastUplinkReceivedAt
 * @property Shapes\LoRaWANDeviceMetadata $LoRaWAN
 * @property Shapes\SidewalkDeviceMetadata $Sidewalk
 */
class GetWirelessDeviceStatisticsResponse extends Response
{
}
