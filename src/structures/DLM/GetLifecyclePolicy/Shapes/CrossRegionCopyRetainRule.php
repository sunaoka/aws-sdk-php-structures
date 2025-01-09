<?php

namespace Sunaoka\Aws\Structures\DLM\GetLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Interval
 * @property 'DAYS'|'WEEKS'|'MONTHS'|'YEARS' $IntervalUnit
 */
class CrossRegionCopyRetainRule extends Shape
{
    /**
     * @param array{
     *     Interval?: int,
     *     IntervalUnit?: 'DAYS'|'WEEKS'|'MONTHS'|'YEARS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
