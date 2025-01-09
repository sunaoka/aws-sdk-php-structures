<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetMulticastGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EU868'|'US915'|'AU915'|'AS923-1'|'AS923-2'|'AS923-3'|'AS923-4'|'EU433'|'CN470'|'CN779'|'RU864'|'KR920'|'IN865' $RfRegion
 * @property 'ClassB'|'ClassC' $DlClass
 * @property int $NumberOfDevicesRequested
 * @property int $NumberOfDevicesInGroup
 * @property ParticipatingGatewaysMulticast $ParticipatingGateways
 */
class LoRaWANMulticastGet extends Shape
{
    /**
     * @param array{
     *     RfRegion?: 'EU868'|'US915'|'AU915'|'AS923-1'|'AS923-2'|'AS923-3'|'AS923-4'|'EU433'|'CN470'|'CN779'|'RU864'|'KR920'|'IN865',
     *     DlClass?: 'ClassB'|'ClassC',
     *     NumberOfDevicesRequested?: int,
     *     NumberOfDevicesInGroup?: int,
     *     ParticipatingGateways?: ParticipatingGatewaysMulticast
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
