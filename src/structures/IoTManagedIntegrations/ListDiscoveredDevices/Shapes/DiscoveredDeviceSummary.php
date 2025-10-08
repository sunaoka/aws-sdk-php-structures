<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListDiscoveredDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConnectorDeviceId
 * @property string|null $ConnectorDeviceName
 * @property list<string>|null $DeviceTypes
 * @property string|null $ManagedThingId
 * @property 'DISCOVERED'|'UPDATED'|'NO_CHANGE'|null $Modification
 * @property \Aws\Api\DateTimeResult|null $DiscoveredAt
 * @property string|null $Brand
 * @property string|null $Model
 * @property string|null $AuthenticationMaterial
 */
class DiscoveredDeviceSummary extends Shape
{
    /**
     * @param array{
     *     ConnectorDeviceId?: string|null,
     *     ConnectorDeviceName?: string|null,
     *     DeviceTypes?: list<string>|null,
     *     ManagedThingId?: string|null,
     *     Modification?: 'DISCOVERED'|'UPDATED'|'NO_CHANGE'|null,
     *     DiscoveredAt?: \Aws\Api\DateTimeResult|null,
     *     Brand?: string|null,
     *     Model?: string|null,
     *     AuthenticationMaterial?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
