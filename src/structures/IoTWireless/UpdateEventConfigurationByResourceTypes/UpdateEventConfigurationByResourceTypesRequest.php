<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateEventConfigurationByResourceTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DeviceRegistrationStateResourceTypeEventConfiguration|null $DeviceRegistrationState
 * @property Shapes\ProximityResourceTypeEventConfiguration|null $Proximity
 * @property Shapes\JoinResourceTypeEventConfiguration|null $Join
 * @property Shapes\ConnectionStatusResourceTypeEventConfiguration|null $ConnectionStatus
 * @property Shapes\MessageDeliveryStatusResourceTypeEventConfiguration|null $MessageDeliveryStatus
 */
class UpdateEventConfigurationByResourceTypesRequest extends Request
{
    /**
     * @param array{
     *     DeviceRegistrationState?: Shapes\DeviceRegistrationStateResourceTypeEventConfiguration|null,
     *     Proximity?: Shapes\ProximityResourceTypeEventConfiguration|null,
     *     Join?: Shapes\JoinResourceTypeEventConfiguration|null,
     *     ConnectionStatus?: Shapes\ConnectionStatusResourceTypeEventConfiguration|null,
     *     MessageDeliveryStatus?: Shapes\MessageDeliveryStatusResourceTypeEventConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
