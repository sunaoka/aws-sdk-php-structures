<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetResourceEventConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\DeviceRegistrationStateEventConfiguration|null $DeviceRegistrationState
 * @property Shapes\ProximityEventConfiguration|null $Proximity
 * @property Shapes\JoinEventConfiguration|null $Join
 * @property Shapes\ConnectionStatusEventConfiguration|null $ConnectionStatus
 * @property Shapes\MessageDeliveryStatusEventConfiguration|null $MessageDeliveryStatus
 */
class GetResourceEventConfigurationResponse extends Response
{
}
