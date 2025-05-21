<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetNotificationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'DEVICE_COMMAND'|'DEVICE_COMMAND_REQUEST'|'DEVICE_EVENT'|'DEVICE_LIFE_CYCLE'|'DEVICE_STATE'|'DEVICE_OTA'|'CONNECTOR_ASSOCIATION'|'CONNECTOR_ERROR_REPORT' $EventType
 */
class GetNotificationConfigurationRequest extends Request
{
    /**
     * @param array{EventType: 'DEVICE_COMMAND'|'DEVICE_COMMAND_REQUEST'|'DEVICE_EVENT'|'DEVICE_LIFE_CYCLE'|'DEVICE_STATE'|'DEVICE_OTA'|'CONNECTOR_ASSOCIATION'|'CONNECTOR_ERROR_REPORT'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
