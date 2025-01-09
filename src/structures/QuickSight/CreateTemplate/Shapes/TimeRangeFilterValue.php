<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $StaticValue
 * @property RollingDateConfiguration $RollingDate
 * @property string $Parameter
 */
class TimeRangeFilterValue extends Shape
{
    /**
     * @param array{
     *     StaticValue?: \Aws\Api\DateTimeResult,
     *     RollingDate?: RollingDateConfiguration,
     *     Parameter?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
