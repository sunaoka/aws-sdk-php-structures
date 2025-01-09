<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DataRate
 * @property list<int> $Frequencies
 */
class Beaconing extends Shape
{
    /**
     * @param array{
     *     DataRate?: int,
     *     Frequencies?: list<int>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
