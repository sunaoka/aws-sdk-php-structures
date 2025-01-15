<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $StaticValue
 * @property RollingDateConfiguration|null $RollingDate
 * @property string|null $Parameter
 */
class TimeRangeFilterValue extends Shape
{
    /**
     * @param array{
     *     StaticValue?: \Aws\Api\DateTimeResult|null,
     *     RollingDate?: RollingDateConfiguration|null,
     *     Parameter?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
