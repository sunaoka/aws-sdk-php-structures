<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\CreateTrigger\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DailyRecurrence|null $daily
 * @property WeeklyRecurrence|null $weekly
 * @property MonthlyRecurrence|null $monthly
 */
class Recurrence extends Shape
{
    /**
     * @param array{
     *     daily?: DailyRecurrence|null,
     *     weekly?: WeeklyRecurrence|null,
     *     monthly?: MonthlyRecurrence|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
