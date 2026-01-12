<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\DeleteNotificationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'DEVICE_COMMAND'|'DEVICE_COMMAND_REQUEST'|'DEVICE_DISCOVERY_STATUS'|'DEVICE_EVENT'|'DEVICE_LIFE_CYCLE'|'DEVICE_STATE'|'DEVICE_OTA'|'DEVICE_WSS'|'CONNECTOR_ASSOCIATION'|'ACCOUNT_ASSOCIATION'|'CONNECTOR_ERROR_REPORT' $EventType
 */
class DeleteNotificationConfigurationRequest extends Request
{
    /**
     * @param array{EventType: 'DEVICE_COMMAND'|'DEVICE_COMMAND_REQUEST'|'DEVICE_DISCOVERY_STATUS'|'DEVICE_EVENT'|'DEVICE_LIFE_CYCLE'|'DEVICE_STATE'|'DEVICE_OTA'|'DEVICE_WSS'|'CONNECTOR_ASSOCIATION'|'ACCOUNT_ASSOCIATION'|'CONNECTOR_ERROR_REPORT'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
