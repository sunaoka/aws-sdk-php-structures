<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Fuota
 * @property int $Multicast
 * @property int $ClockSync
 * @property Positioning $Positioning
 * @property list<ApplicationConfig> $Applications
 */
class FPorts extends Shape
{
    /**
     * @param array{
     *     Fuota?: int,
     *     Multicast?: int,
     *     ClockSync?: int,
     *     Positioning?: Positioning,
     *     Applications?: list<ApplicationConfig>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
