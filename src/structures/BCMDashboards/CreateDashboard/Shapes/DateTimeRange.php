<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DateTimeValue $startTime
 * @property DateTimeValue $endTime
 */
class DateTimeRange extends Shape
{
    /**
     * @param array{
     *     startTime: DateTimeValue,
     *     endTime: DateTimeValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
