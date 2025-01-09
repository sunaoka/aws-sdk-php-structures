<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetResourceEventConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property 'PartnerAccountId'|'DevEui'|'FuotaTaskId'|'GatewayEui'|'WirelessDeviceId'|'WirelessGatewayId' $IdentifierType
 * @property 'Sidewalk' $PartnerType
 */
class GetResourceEventConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     IdentifierType: 'PartnerAccountId'|'DevEui'|'FuotaTaskId'|'GatewayEui'|'WirelessDeviceId'|'WirelessGatewayId',
     *     PartnerType?: 'Sidewalk'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
