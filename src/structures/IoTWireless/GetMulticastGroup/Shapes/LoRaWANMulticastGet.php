<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetMulticastGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EU868'|'US915'|'AU915'|'AS923-1'|'AS923-2'|'AS923-3'|'AS923-4'|'EU433'|'CN470'|'CN779'|'RU864'|'KR920'|'IN865'|null $RfRegion
 * @property 'ClassB'|'ClassC'|null $DlClass
 * @property int|null $NumberOfDevicesRequested
 * @property int|null $NumberOfDevicesInGroup
 * @property ParticipatingGatewaysMulticast|null $ParticipatingGateways
 */
class LoRaWANMulticastGet extends Shape
{
    /**
     * @param array{
     *     RfRegion?: 'EU868'|'US915'|'AU915'|'AS923-1'|'AS923-2'|'AS923-3'|'AS923-4'|'EU433'|'CN470'|'CN779'|'RU864'|'KR920'|'IN865'|null,
     *     DlClass?: 'ClassB'|'ClassC'|null,
     *     NumberOfDevicesRequested?: int|null,
     *     NumberOfDevicesInGroup?: int|null,
     *     ParticipatingGateways?: ParticipatingGatewaysMulticast|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
