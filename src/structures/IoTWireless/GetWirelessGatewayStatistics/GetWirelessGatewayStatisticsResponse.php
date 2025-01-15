<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessGatewayStatistics;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $WirelessGatewayId
 * @property string|null $LastUplinkReceivedAt
 * @property 'Connected'|'Disconnected'|null $ConnectionStatus
 */
class GetWirelessGatewayStatisticsResponse extends Response
{
}
