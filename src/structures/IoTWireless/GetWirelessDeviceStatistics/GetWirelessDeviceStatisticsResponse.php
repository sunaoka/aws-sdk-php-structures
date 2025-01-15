<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDeviceStatistics;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $WirelessDeviceId
 * @property string|null $LastUplinkReceivedAt
 * @property Shapes\LoRaWANDeviceMetadata|null $LoRaWAN
 * @property Shapes\SidewalkDeviceMetadata|null $Sidewalk
 */
class GetWirelessDeviceStatisticsResponse extends Response
{
}
