<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetDeviceDiscovery;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Id
 * @property string $Arn
 * @property 'ZWAVE'|'ZIGBEE'|'CLOUD' $DiscoveryType
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'TIMED_OUT' $Status
 * @property \Aws\Api\DateTimeResult $StartedAt
 * @property string|null $ControllerId
 * @property string|null $ConnectorAssociationId
 * @property \Aws\Api\DateTimeResult|null $FinishedAt
 * @property array<string, string>|null $Tags
 */
class GetDeviceDiscoveryResponse extends Response
{
}
