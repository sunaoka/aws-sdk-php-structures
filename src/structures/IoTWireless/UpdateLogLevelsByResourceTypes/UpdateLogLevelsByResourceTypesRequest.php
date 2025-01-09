<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateLogLevelsByResourceTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'INFO'|'ERROR'|'DISABLED' $DefaultLogLevel
 * @property list<Shapes\FuotaTaskLogOption> $FuotaTaskLogOptions
 * @property list<Shapes\WirelessDeviceLogOption> $WirelessDeviceLogOptions
 * @property list<Shapes\WirelessGatewayLogOption> $WirelessGatewayLogOptions
 */
class UpdateLogLevelsByResourceTypesRequest extends Request
{
    /**
     * @param array{
     *     DefaultLogLevel?: 'INFO'|'ERROR'|'DISABLED',
     *     FuotaTaskLogOptions?: list<Shapes\FuotaTaskLogOption>,
     *     WirelessDeviceLogOptions?: list<Shapes\WirelessDeviceLogOption>,
     *     WirelessGatewayLogOptions?: list<Shapes\WirelessGatewayLogOption>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
