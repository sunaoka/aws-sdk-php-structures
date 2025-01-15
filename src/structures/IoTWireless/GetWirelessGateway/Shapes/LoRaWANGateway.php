<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GatewayEui
 * @property string|null $RfRegion
 * @property list<list<string>>|null $JoinEuiFilters
 * @property list<string>|null $NetIdFilters
 * @property list<int<1, 8>>|null $SubBands
 * @property Beaconing|null $Beaconing
 * @property float|null $MaxEirp
 */
class LoRaWANGateway extends Shape
{
    /**
     * @param array{
     *     GatewayEui?: string|null,
     *     RfRegion?: string|null,
     *     JoinEuiFilters?: list<list<string>>|null,
     *     NetIdFilters?: list<string>|null,
     *     SubBands?: list<int<1, 8>>|null,
     *     Beaconing?: Beaconing|null,
     *     MaxEirp?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
