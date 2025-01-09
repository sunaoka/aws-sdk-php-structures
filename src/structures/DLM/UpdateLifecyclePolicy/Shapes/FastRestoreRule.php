<?php

namespace Sunaoka\Aws\Structures\DLM\UpdateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1000> $Count
 * @property int<1, max> $Interval
 * @property 'DAYS'|'WEEKS'|'MONTHS'|'YEARS' $IntervalUnit
 * @property list<string> $AvailabilityZones
 */
class FastRestoreRule extends Shape
{
    /**
     * @param array{
     *     Count?: int<1, 1000>,
     *     Interval?: int<1, max>,
     *     IntervalUnit?: 'DAYS'|'WEEKS'|'MONTHS'|'YEARS',
     *     AvailabilityZones: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
