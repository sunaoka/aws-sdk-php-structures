<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetLogLevelsByResourceTypes;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'INFO'|'ERROR'|'DISABLED'|null $DefaultLogLevel
 * @property list<Shapes\WirelessGatewayLogOption>|null $WirelessGatewayLogOptions
 * @property list<Shapes\WirelessDeviceLogOption>|null $WirelessDeviceLogOptions
 * @property list<Shapes\FuotaTaskLogOption>|null $FuotaTaskLogOptions
 */
class GetLogLevelsByResourceTypesResponse extends Response
{
}
