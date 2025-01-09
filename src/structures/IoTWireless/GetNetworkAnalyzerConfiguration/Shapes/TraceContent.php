<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetNetworkAnalyzerConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $WirelessDeviceFrameInfo
 * @property 'INFO'|'ERROR'|'DISABLED' $LogLevel
 * @property 'ENABLED'|'DISABLED' $MulticastFrameInfo
 */
class TraceContent extends Shape
{
    /**
     * @param array{
     *     WirelessDeviceFrameInfo?: 'ENABLED'|'DISABLED',
     *     LogLevel?: 'INFO'|'ERROR'|'DISABLED',
     *     MulticastFrameInfo?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
