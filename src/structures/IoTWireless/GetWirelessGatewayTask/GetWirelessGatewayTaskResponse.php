<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessGatewayTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $WirelessGatewayId
 * @property string $WirelessGatewayTaskDefinitionId
 * @property string $LastUplinkReceivedAt
 * @property string $TaskCreatedAt
 * @property 'PENDING'|'IN_PROGRESS'|'FIRST_RETRY'|'SECOND_RETRY'|'COMPLETED'|'FAILED' $Status
 */
class GetWirelessGatewayTaskResponse extends Response
{
}
