<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListEventConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Identifier
 * @property 'PartnerAccountId'|'DevEui'|'FuotaTaskId'|'GatewayEui'|'WirelessDeviceId'|'WirelessGatewayId' $IdentifierType
 * @property 'Sidewalk' $PartnerType
 * @property EventNotificationItemConfigurations $Events
 */
class EventConfigurationItem extends Shape
{
    /**
     * @param array{
     *     Identifier?: string,
     *     IdentifierType?: 'PartnerAccountId'|'DevEui'|'FuotaTaskId'|'GatewayEui'|'WirelessDeviceId'|'WirelessGatewayId',
     *     PartnerType?: 'Sidewalk',
     *     Events?: EventNotificationItemConfigurations
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
