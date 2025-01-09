<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateMulticastGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EU868'|'US915'|'AU915'|'AS923-1'|'AS923-2'|'AS923-3'|'AS923-4'|'EU433'|'CN470'|'CN779'|'RU864'|'KR920'|'IN865' $RfRegion
 * @property 'ClassB'|'ClassC' $DlClass
 * @property ParticipatingGatewaysMulticast $ParticipatingGateways
 */
class LoRaWANMulticast extends Shape
{
    /**
     * @param array{
     *     RfRegion?: 'EU868'|'US915'|'AU915'|'AS923-1'|'AS923-2'|'AS923-3'|'AS923-4'|'EU433'|'CN470'|'CN779'|'RU864'|'KR920'|'IN865',
     *     DlClass?: 'ClassB'|'ClassC',
     *     ParticipatingGateways?: ParticipatingGatewaysMulticast
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
