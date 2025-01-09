<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GatewayEui
 * @property string $RfRegion
 * @property list<list<string>> $JoinEuiFilters
 * @property list<string> $NetIdFilters
 * @property list<int> $SubBands
 * @property Beaconing $Beaconing
 * @property float $MaxEirp
 */
class LoRaWANGateway extends Shape
{
    /**
     * @param array{
     *     GatewayEui?: string,
     *     RfRegion?: string,
     *     JoinEuiFilters?: list<list<string>>,
     *     NetIdFilters?: list<string>,
     *     SubBands?: list<int>,
     *     Beaconing?: Beaconing,
     *     MaxEirp?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
