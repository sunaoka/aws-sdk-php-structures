<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTopicRefreshSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $IsEnabled
 * @property bool $BasedOnSpiceSchedule
 * @property \Aws\Api\DateTimeResult|null $StartingAt
 * @property string|null $Timezone
 * @property string|null $RepeatAt
 * @property 'HOURLY'|'DAILY'|'WEEKLY'|'MONTHLY'|null $TopicScheduleType
 */
class TopicRefreshSchedule extends Shape
{
    /**
     * @param array{
     *     IsEnabled: bool,
     *     BasedOnSpiceSchedule: bool,
     *     StartingAt?: \Aws\Api\DateTimeResult|null,
     *     Timezone?: string|null,
     *     RepeatAt?: string|null,
     *     TopicScheduleType?: 'HOURLY'|'DAILY'|'WEEKLY'|'MONTHLY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
