<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopicRefreshSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $IsEnabled
 * @property bool $BasedOnSpiceSchedule
 * @property \Aws\Api\DateTimeResult $StartingAt
 * @property string $Timezone
 * @property string $RepeatAt
 * @property 'HOURLY'|'DAILY'|'WEEKLY'|'MONTHLY' $TopicScheduleType
 */
class TopicRefreshSchedule extends Shape
{
    /**
     * @param array{
     *     IsEnabled: bool,
     *     BasedOnSpiceSchedule: bool,
     *     StartingAt?: \Aws\Api\DateTimeResult,
     *     Timezone?: string,
     *     RepeatAt?: string,
     *     TopicScheduleType?: 'HOURLY'|'DAILY'|'WEEKLY'|'MONTHLY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
