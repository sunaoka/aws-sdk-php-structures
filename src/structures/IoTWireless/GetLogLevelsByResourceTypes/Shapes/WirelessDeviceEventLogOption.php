<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetLogLevelsByResourceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Join'|'Rejoin'|'Uplink_Data'|'Downlink_Data'|'Registration' $Event
 * @property 'INFO'|'ERROR'|'DISABLED' $LogLevel
 */
class WirelessDeviceEventLogOption extends Shape
{
    /**
     * @param array{
     *     Event: 'Join'|'Rejoin'|'Uplink_Data'|'Downlink_Data'|'Registration',
     *     LogLevel: 'INFO'|'ERROR'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
