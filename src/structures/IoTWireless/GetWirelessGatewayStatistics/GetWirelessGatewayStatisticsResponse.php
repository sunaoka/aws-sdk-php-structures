<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessGatewayStatistics;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $WirelessGatewayId
 * @property string $LastUplinkReceivedAt
 * @property 'Connected'|'Disconnected' $ConnectionStatus
 */
class GetWirelessGatewayStatisticsResponse extends Response
{
}
