<?php

namespace Sunaoka\Aws\Structures\DLM\UpdateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Count
 * @property int $Interval
 * @property 'DAYS'|'WEEKS'|'MONTHS'|'YEARS' $IntervalUnit
 * @property list<string> $AvailabilityZones
 */
class FastRestoreRule extends Shape
{
    /**
     * @param array{
     *     Count?: int,
     *     Interval?: int,
     *     IntervalUnit?: 'DAYS'|'WEEKS'|'MONTHS'|'YEARS',
     *     AvailabilityZones: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
