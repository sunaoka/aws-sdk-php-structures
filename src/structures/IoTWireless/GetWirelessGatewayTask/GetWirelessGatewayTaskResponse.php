<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessGatewayTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $WirelessGatewayId
 * @property string|null $WirelessGatewayTaskDefinitionId
 * @property string|null $LastUplinkReceivedAt
 * @property string|null $TaskCreatedAt
 * @property 'PENDING'|'IN_PROGRESS'|'FIRST_RETRY'|'SECOND_RETRY'|'COMPLETED'|'FAILED'|null $Status
 */
class GetWirelessGatewayTaskResponse extends Response
{
}
