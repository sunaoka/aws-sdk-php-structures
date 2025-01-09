<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 223> $Fuota
 * @property int<1, 223> $Multicast
 * @property int<1, 223> $ClockSync
 * @property Positioning $Positioning
 * @property list<ApplicationConfig> $Applications
 */
class FPorts extends Shape
{
    /**
     * @param array{
     *     Fuota?: int<1, 223>,
     *     Multicast?: int<1, 223>,
     *     ClockSync?: int<1, 223>,
     *     Positioning?: Positioning,
     *     Applications?: list<ApplicationConfig>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
