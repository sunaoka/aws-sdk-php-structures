<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateResourceEventConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property 'PartnerAccountId'|'DevEui'|'FuotaTaskId'|'GatewayEui'|'WirelessDeviceId'|'WirelessGatewayId' $IdentifierType
 * @property 'Sidewalk'|null $PartnerType
 * @property Shapes\DeviceRegistrationStateEventConfiguration|null $DeviceRegistrationState
 * @property Shapes\ProximityEventConfiguration|null $Proximity
 * @property Shapes\JoinEventConfiguration|null $Join
 * @property Shapes\ConnectionStatusEventConfiguration|null $ConnectionStatus
 * @property Shapes\MessageDeliveryStatusEventConfiguration|null $MessageDeliveryStatus
 */
class UpdateResourceEventConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     IdentifierType: 'PartnerAccountId'|'DevEui'|'FuotaTaskId'|'GatewayEui'|'WirelessDeviceId'|'WirelessGatewayId',
     *     PartnerType?: 'Sidewalk'|null,
     *     DeviceRegistrationState?: Shapes\DeviceRegistrationStateEventConfiguration|null,
     *     Proximity?: Shapes\ProximityEventConfiguration|null,
     *     Join?: Shapes\JoinEventConfiguration|null,
     *     ConnectionStatus?: Shapes\ConnectionStatusEventConfiguration|null,
     *     MessageDeliveryStatus?: Shapes\MessageDeliveryStatusEventConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
