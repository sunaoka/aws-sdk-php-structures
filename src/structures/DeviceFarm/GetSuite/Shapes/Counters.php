<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $total
 * @property int|null $passed
 * @property int|null $failed
 * @property int|null $warned
 * @property int|null $errored
 * @property int|null $stopped
 * @property int|null $skipped
 */
class Counters extends Shape
{
    /**
     * @param array{
     *     total?: int|null,
     *     passed?: int|null,
     *     failed?: int|null,
     *     warned?: int|null,
     *     errored?: int|null,
     *     stopped?: int|null,
     *     skipped?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
