<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $wifi
 * @property bool|null $bluetooth
 * @property bool|null $nfc
 * @property bool|null $gps
 */
class Radios extends Shape
{
    /**
     * @param array{
     *     wifi?: bool|null,
     *     bluetooth?: bool|null,
     *     nfc?: bool|null,
     *     gps?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
