<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListDeviceDiscoveries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property 'ZWAVE'|'ZIGBEE'|'CLOUD'|'CUSTOM'|null $DiscoveryType
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|null $Status
 */
class DeviceDiscoverySummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     DiscoveryType?: 'ZWAVE'|'ZIGBEE'|'CLOUD'|'CUSTOM'|null,
     *     Status?: 'RUNNING'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
