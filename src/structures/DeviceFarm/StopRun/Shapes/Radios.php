<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\StopRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $wifi
 * @property bool $bluetooth
 * @property bool $nfc
 * @property bool $gps
 */
class Radios extends Shape
{
    /**
     * @param array{
     *     wifi?: bool,
     *     bluetooth?: bool,
     *     nfc?: bool,
     *     gps?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
