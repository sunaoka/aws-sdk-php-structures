<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetEventConfigurationByResourceTypes;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\DeviceRegistrationStateResourceTypeEventConfiguration|null $DeviceRegistrationState
 * @property Shapes\ProximityResourceTypeEventConfiguration|null $Proximity
 * @property Shapes\JoinResourceTypeEventConfiguration|null $Join
 * @property Shapes\ConnectionStatusResourceTypeEventConfiguration|null $ConnectionStatus
 * @property Shapes\MessageDeliveryStatusResourceTypeEventConfiguration|null $MessageDeliveryStatus
 */
class GetEventConfigurationByResourceTypesResponse extends Response
{
}
