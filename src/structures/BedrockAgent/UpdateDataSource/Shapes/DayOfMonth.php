<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 28>|null $dayNumber
 * @property LastDayOfMonth|null $lastDayOfMonth
 */
class DayOfMonth extends Shape
{
    /**
     * @param array{
     *     dayNumber?: int<1, 28>|null,
     *     lastDayOfMonth?: LastDayOfMonth|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
