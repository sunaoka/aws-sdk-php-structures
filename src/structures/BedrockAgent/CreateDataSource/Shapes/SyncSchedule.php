<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DailySchedule|null $daily
 * @property WeeklySchedule|null $weekly
 * @property MonthlySchedule|null $monthly
 */
class SyncSchedule extends Shape
{
    /**
     * @param array{
     *     daily?: DailySchedule|null,
     *     weekly?: WeeklySchedule|null,
     *     monthly?: MonthlySchedule|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
