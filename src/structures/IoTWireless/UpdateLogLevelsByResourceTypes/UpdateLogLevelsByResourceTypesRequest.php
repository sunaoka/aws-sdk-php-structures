<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateLogLevelsByResourceTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'INFO'|'ERROR'|'DISABLED'|null $DefaultLogLevel
 * @property list<Shapes\WirelessDeviceLogOption>|null $WirelessDeviceLogOptions
 * @property list<Shapes\WirelessGatewayLogOption>|null $WirelessGatewayLogOptions
 */
class UpdateLogLevelsByResourceTypesRequest extends Request
{
    /**
     * @param array{
     *     DefaultLogLevel?: 'INFO'|'ERROR'|'DISABLED'|null,
     *     WirelessDeviceLogOptions?: list<Shapes\WirelessDeviceLogOption>|null,
     *     WirelessGatewayLogOptions?: list<Shapes\WirelessGatewayLogOption>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
