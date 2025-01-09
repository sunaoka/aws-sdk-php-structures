<?php

namespace Sunaoka\Aws\Structures\DLM\UpdateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 1000> $Count
 * @property int<0, max> $Interval
 * @property 'DAYS'|'WEEKS'|'MONTHS'|'YEARS' $IntervalUnit
 */
class RetainRule extends Shape
{
    /**
     * @param array{
     *     Count?: int<0, 1000>,
     *     Interval?: int<0, max>,
     *     IntervalUnit?: 'DAYS'|'WEEKS'|'MONTHS'|'YEARS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
