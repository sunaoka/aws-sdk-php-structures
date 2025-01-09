<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeHoursOfOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Hours
 * @property int $Minutes
 */
class HoursOfOperationTimeSlice extends Shape
{
    /**
     * @param array{
     *     Hours: int,
     *     Minutes: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
