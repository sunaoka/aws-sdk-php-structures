<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListEventConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Identifier
 * @property 'PartnerAccountId'|'DevEui'|'FuotaTaskId'|'GatewayEui'|'WirelessDeviceId'|'WirelessGatewayId'|null $IdentifierType
 * @property 'Sidewalk'|null $PartnerType
 * @property EventNotificationItemConfigurations|null $Events
 */
class EventConfigurationItem extends Shape
{
    /**
     * @param array{
     *     Identifier?: string|null,
     *     IdentifierType?: 'PartnerAccountId'|'DevEui'|'FuotaTaskId'|'GatewayEui'|'WirelessDeviceId'|'WirelessGatewayId'|null,
     *     PartnerType?: 'Sidewalk'|null,
     *     Events?: EventNotificationItemConfigurations|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
