<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDeviceStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Rssi
 * @property 'normal'|'low'|'critical'|null $BatteryLevel
 * @property 'discovered'|'lost'|'ack'|'nack'|'passthrough'|null $Event
 * @property 'Provisioned'|'RegisteredNotSeen'|'RegisteredReachable'|'RegisteredUnreachable'|null $DeviceState
 */
class SidewalkDeviceMetadata extends Shape
{
    /**
     * @param array{
     *     Rssi?: int|null,
     *     BatteryLevel?: 'normal'|'low'|'critical'|null,
     *     Event?: 'discovered'|'lost'|'ack'|'nack'|'passthrough'|null,
     *     DeviceState?: 'Provisioned'|'RegisteredNotSeen'|'RegisteredReachable'|'RegisteredUnreachable'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
