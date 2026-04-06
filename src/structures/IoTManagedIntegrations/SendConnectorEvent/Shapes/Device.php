<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\SendConnectorEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConnectorDeviceId
 * @property string|null $ConnectorDeviceName
 * @property MatterCapabilityReport $CapabilityReport
 * @property list<CapabilitySchemaItem>|null $CapabilitySchemas
 * @property DeviceMetadata|null $DeviceMetadata
 */
class Device extends Shape
{
    /**
     * @param array{
     *     ConnectorDeviceId: string,
     *     ConnectorDeviceName?: string|null,
     *     CapabilityReport: MatterCapabilityReport,
     *     CapabilitySchemas?: list<CapabilitySchemaItem>|null,
     *     DeviceMetadata?: DeviceMetadata|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
