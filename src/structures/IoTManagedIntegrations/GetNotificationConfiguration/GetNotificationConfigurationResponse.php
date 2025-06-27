<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetNotificationConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'DEVICE_COMMAND'|'DEVICE_COMMAND_REQUEST'|'DEVICE_DISCOVERY_STATUS'|'DEVICE_EVENT'|'DEVICE_LIFE_CYCLE'|'DEVICE_STATE'|'DEVICE_OTA'|'CONNECTOR_ASSOCIATION'|'ACCOUNT_ASSOCIATION'|'CONNECTOR_ERROR_REPORT'|null $EventType
 * @property string|null $DestinationName
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property array<string, string>|null $Tags
 */
class GetNotificationConfigurationResponse extends Response
{
}
