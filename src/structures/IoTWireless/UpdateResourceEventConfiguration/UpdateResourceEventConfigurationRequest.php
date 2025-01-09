<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateResourceEventConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property 'PartnerAccountId'|'DevEui'|'FuotaTaskId'|'GatewayEui'|'WirelessDeviceId'|'WirelessGatewayId' $IdentifierType
 * @property 'Sidewalk' $PartnerType
 * @property Shapes\DeviceRegistrationStateEventConfiguration $DeviceRegistrationState
 * @property Shapes\ProximityEventConfiguration $Proximity
 * @property Shapes\JoinEventConfiguration $Join
 * @property Shapes\ConnectionStatusEventConfiguration $ConnectionStatus
 * @property Shapes\MessageDeliveryStatusEventConfiguration $MessageDeliveryStatus
 */
class UpdateResourceEventConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     IdentifierType: 'PartnerAccountId'|'DevEui'|'FuotaTaskId'|'GatewayEui'|'WirelessDeviceId'|'WirelessGatewayId',
     *     PartnerType?: 'Sidewalk',
     *     DeviceRegistrationState?: Shapes\DeviceRegistrationStateEventConfiguration,
     *     Proximity?: Shapes\ProximityEventConfiguration,
     *     Join?: Shapes\JoinEventConfiguration,
     *     ConnectionStatus?: Shapes\ConnectionStatusEventConfiguration,
     *     MessageDeliveryStatus?: Shapes\MessageDeliveryStatusEventConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
