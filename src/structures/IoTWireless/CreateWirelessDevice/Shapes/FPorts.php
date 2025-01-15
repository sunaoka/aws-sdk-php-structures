<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 223>|null $Fuota
 * @property int<1, 223>|null $Multicast
 * @property int<1, 223>|null $ClockSync
 * @property Positioning|null $Positioning
 * @property list<ApplicationConfig>|null $Applications
 */
class FPorts extends Shape
{
    /**
     * @param array{
     *     Fuota?: int<1, 223>|null,
     *     Multicast?: int<1, 223>|null,
     *     ClockSync?: int<1, 223>|null,
     *     Positioning?: Positioning|null,
     *     Applications?: list<ApplicationConfig>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
