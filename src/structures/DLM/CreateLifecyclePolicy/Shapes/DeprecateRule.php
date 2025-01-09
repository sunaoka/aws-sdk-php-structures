<?php

namespace Sunaoka\Aws\Structures\DLM\CreateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1000> $Count
 * @property int<1, max> $Interval
 * @property 'DAYS'|'WEEKS'|'MONTHS'|'YEARS' $IntervalUnit
 */
class DeprecateRule extends Shape
{
    /**
     * @param array{
     *     Count?: int<1, 1000>,
     *     Interval?: int<1, max>,
     *     IntervalUnit?: 'DAYS'|'WEEKS'|'MONTHS'|'YEARS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
