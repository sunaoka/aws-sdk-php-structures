<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListNotificationConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEVICE_COMMAND'|'DEVICE_COMMAND_REQUEST'|'DEVICE_EVENT'|'DEVICE_LIFE_CYCLE'|'DEVICE_STATE'|'DEVICE_OTA'|'CONNECTOR_ASSOCIATION'|'CONNECTOR_ERROR_REPORT'|null $EventType
 * @property string|null $DestinationName
 */
class NotificationConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     EventType?: 'DEVICE_COMMAND'|'DEVICE_COMMAND_REQUEST'|'DEVICE_EVENT'|'DEVICE_LIFE_CYCLE'|'DEVICE_STATE'|'DEVICE_OTA'|'CONNECTOR_ASSOCIATION'|'CONNECTOR_ERROR_REPORT'|null,
     *     DestinationName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
