<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateNotificationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'DEVICE_COMMAND'|'DEVICE_COMMAND_REQUEST'|'DEVICE_DISCOVERY_STATUS'|'DEVICE_EVENT'|'DEVICE_LIFE_CYCLE'|'DEVICE_STATE'|'DEVICE_OTA'|'DEVICE_WSS'|'CONNECTOR_ASSOCIATION'|'ACCOUNT_ASSOCIATION'|'CONNECTOR_ERROR_REPORT' $EventType
 * @property string $DestinationName
 * @property string|null $ClientToken
 * @property array<string, string>|null $Tags
 */
class CreateNotificationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     EventType: 'DEVICE_COMMAND'|'DEVICE_COMMAND_REQUEST'|'DEVICE_DISCOVERY_STATUS'|'DEVICE_EVENT'|'DEVICE_LIFE_CYCLE'|'DEVICE_STATE'|'DEVICE_OTA'|'DEVICE_WSS'|'CONNECTOR_ASSOCIATION'|'ACCOUNT_ASSOCIATION'|'CONNECTOR_ERROR_REPORT',
     *     DestinationName: string,
     *     ClientToken?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
