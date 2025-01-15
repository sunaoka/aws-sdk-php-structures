<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateNetworkAnalyzerConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $WirelessDeviceFrameInfo
 * @property 'INFO'|'ERROR'|'DISABLED'|null $LogLevel
 * @property 'ENABLED'|'DISABLED'|null $MulticastFrameInfo
 */
class TraceContent extends Shape
{
    /**
     * @param array{
     *     WirelessDeviceFrameInfo?: 'ENABLED'|'DISABLED'|null,
     *     LogLevel?: 'INFO'|'ERROR'|'DISABLED'|null,
     *     MulticastFrameInfo?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
