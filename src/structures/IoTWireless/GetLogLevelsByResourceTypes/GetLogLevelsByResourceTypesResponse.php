<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetLogLevelsByResourceTypes;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'INFO'|'ERROR'|'DISABLED' $DefaultLogLevel
 * @property list<Shapes\WirelessGatewayLogOption> $WirelessGatewayLogOptions
 * @property list<Shapes\WirelessDeviceLogOption> $WirelessDeviceLogOptions
 * @property list<Shapes\FuotaTaskLogOption> $FuotaTaskLogOptions
 */
class GetLogLevelsByResourceTypesResponse extends Response
{
}
