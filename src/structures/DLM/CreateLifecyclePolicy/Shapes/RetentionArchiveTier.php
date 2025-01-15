<?php

namespace Sunaoka\Aws\Structures\DLM\CreateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1000>|null $Count
 * @property int<1, max>|null $Interval
 * @property 'DAYS'|'WEEKS'|'MONTHS'|'YEARS'|null $IntervalUnit
 */
class RetentionArchiveTier extends Shape
{
    /**
     * @param array{
     *     Count?: int<1, 1000>|null,
     *     Interval?: int<1, max>|null,
     *     IntervalUnit?: 'DAYS'|'WEEKS'|'MONTHS'|'YEARS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
