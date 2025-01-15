<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateWirelessGatewayTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $WirelessGatewayTaskDefinitionId
 * @property 'PENDING'|'IN_PROGRESS'|'FIRST_RETRY'|'SECOND_RETRY'|'COMPLETED'|'FAILED'|null $Status
 */
class CreateWirelessGatewayTaskResponse extends Response
{
}
