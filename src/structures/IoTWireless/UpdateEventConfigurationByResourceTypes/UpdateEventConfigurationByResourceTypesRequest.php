<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateEventConfigurationByResourceTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DeviceRegistrationStateResourceTypeEventConfiguration $DeviceRegistrationState
 * @property Shapes\ProximityResourceTypeEventConfiguration $Proximity
 * @property Shapes\JoinResourceTypeEventConfiguration $Join
 * @property Shapes\ConnectionStatusResourceTypeEventConfiguration $ConnectionStatus
 * @property Shapes\MessageDeliveryStatusResourceTypeEventConfiguration $MessageDeliveryStatus
 */
class UpdateEventConfigurationByResourceTypesRequest extends Request
{
    /**
     * @param array{
     *     DeviceRegistrationState?: Shapes\DeviceRegistrationStateResourceTypeEventConfiguration,
     *     Proximity?: Shapes\ProximityResourceTypeEventConfiguration,
     *     Join?: Shapes\JoinResourceTypeEventConfiguration,
     *     ConnectionStatus?: Shapes\ConnectionStatusResourceTypeEventConfiguration,
     *     MessageDeliveryStatus?: Shapes\MessageDeliveryStatusResourceTypeEventConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
