<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListEventConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DeviceRegistrationStateEventConfiguration $DeviceRegistrationState
 * @property ProximityEventConfiguration $Proximity
 * @property JoinEventConfiguration $Join
 * @property ConnectionStatusEventConfiguration $ConnectionStatus
 * @property MessageDeliveryStatusEventConfiguration $MessageDeliveryStatus
 */
class EventNotificationItemConfigurations extends Shape
{
    /**
     * @param array{
     *     DeviceRegistrationState?: DeviceRegistrationStateEventConfiguration,
     *     Proximity?: ProximityEventConfiguration,
     *     Join?: JoinEventConfiguration,
     *     ConnectionStatus?: ConnectionStatusEventConfiguration,
     *     MessageDeliveryStatus?: MessageDeliveryStatusEventConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
