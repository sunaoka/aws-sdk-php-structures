<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDeviceStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Rssi
 * @property 'normal'|'low'|'critical' $BatteryLevel
 * @property 'discovered'|'lost'|'ack'|'nack'|'passthrough' $Event
 * @property 'Provisioned'|'RegisteredNotSeen'|'RegisteredReachable'|'RegisteredUnreachable' $DeviceState
 */
class SidewalkDeviceMetadata extends Shape
{
    /**
     * @param array{
     *     Rssi?: int,
     *     BatteryLevel?: 'normal'|'low'|'critical',
     *     Event?: 'discovered'|'lost'|'ack'|'nack'|'passthrough',
     *     DeviceState?: 'Provisioned'|'RegisteredNotSeen'|'RegisteredReachable'|'RegisteredUnreachable'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
