<?php

namespace Sunaoka\Aws\Structures\DLM\GetLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Count
 * @property int $Interval
 * @property 'DAYS'|'WEEKS'|'MONTHS'|'YEARS' $IntervalUnit
 */
class DeprecateRule extends Shape
{
    /**
     * @param array{
     *     Count?: int,
     *     Interval?: int,
     *     IntervalUnit?: 'DAYS'|'WEEKS'|'MONTHS'|'YEARS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
