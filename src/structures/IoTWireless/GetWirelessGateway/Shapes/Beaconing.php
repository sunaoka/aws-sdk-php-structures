<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 15>|null $DataRate
 * @property list<int<100000000, 1000000000>>|null $Frequencies
 */
class Beaconing extends Shape
{
    /**
     * @param array{
     *     DataRate?: int<0, 15>|null,
     *     Frequencies?: list<int<100000000, 1000000000>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
