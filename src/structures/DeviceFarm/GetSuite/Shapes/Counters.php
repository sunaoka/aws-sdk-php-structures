<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $total
 * @property int $passed
 * @property int $failed
 * @property int $warned
 * @property int $errored
 * @property int $stopped
 * @property int $skipped
 */
class Counters extends Shape
{
    /**
     * @param array{
     *     total?: int,
     *     passed?: int,
     *     failed?: int,
     *     warned?: int,
     *     errored?: int,
     *     stopped?: int,
     *     skipped?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
