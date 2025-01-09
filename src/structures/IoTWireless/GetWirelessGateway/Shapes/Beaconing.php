<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 15> $DataRate
 * @property list<int<100000000, 1000000000>> $Frequencies
 */
class Beaconing extends Shape
{
    /**
     * @param array{
     *     DataRate?: int<0, 15>,
     *     Frequencies?: list<int<100000000, 1000000000>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
