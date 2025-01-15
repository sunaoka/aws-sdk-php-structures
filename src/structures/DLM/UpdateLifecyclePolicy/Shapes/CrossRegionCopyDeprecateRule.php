<?php

namespace Sunaoka\Aws\Structures\DLM\UpdateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $Interval
 * @property 'DAYS'|'WEEKS'|'MONTHS'|'YEARS'|null $IntervalUnit
 */
class CrossRegionCopyDeprecateRule extends Shape
{
    /**
     * @param array{
     *     Interval?: int<1, max>|null,
     *     IntervalUnit?: 'DAYS'|'WEEKS'|'MONTHS'|'YEARS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
