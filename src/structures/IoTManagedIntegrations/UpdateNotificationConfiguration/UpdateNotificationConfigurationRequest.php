<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\UpdateNotificationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'DEVICE_COMMAND'|'DEVICE_COMMAND_REQUEST'|'DEVICE_DISCOVERY_STATUS'|'DEVICE_EVENT'|'DEVICE_LIFE_CYCLE'|'DEVICE_STATE'|'DEVICE_OTA'|'CONNECTOR_ASSOCIATION'|'ACCOUNT_ASSOCIATION'|'CONNECTOR_ERROR_REPORT' $EventType
 * @property string $DestinationName
 */
class UpdateNotificationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     EventType: 'DEVICE_COMMAND'|'DEVICE_COMMAND_REQUEST'|'DEVICE_DISCOVERY_STATUS'|'DEVICE_EVENT'|'DEVICE_LIFE_CYCLE'|'DEVICE_STATE'|'DEVICE_OTA'|'CONNECTOR_ASSOCIATION'|'ACCOUNT_ASSOCIATION'|'CONNECTOR_ERROR_REPORT',
     *     DestinationName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
