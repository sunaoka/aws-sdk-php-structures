<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListEventConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DeviceRegistrationStateEventConfiguration|null $DeviceRegistrationState
 * @property ProximityEventConfiguration|null $Proximity
 * @property JoinEventConfiguration|null $Join
 * @property ConnectionStatusEventConfiguration|null $ConnectionStatus
 * @property MessageDeliveryStatusEventConfiguration|null $MessageDeliveryStatus
 */
class EventNotificationItemConfigurations extends Shape
{
    /**
     * @param array{
     *     DeviceRegistrationState?: DeviceRegistrationStateEventConfiguration|null,
     *     Proximity?: ProximityEventConfiguration|null,
     *     Join?: JoinEventConfiguration|null,
     *     ConnectionStatus?: ConnectionStatusEventConfiguration|null,
     *     MessageDeliveryStatus?: MessageDeliveryStatusEventConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
