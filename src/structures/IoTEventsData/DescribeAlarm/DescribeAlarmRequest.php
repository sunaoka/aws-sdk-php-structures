<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\DescribeAlarm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $alarmModelName
 * @property string|null $keyValue
 */
class DescribeAlarmRequest extends Request
{
    /**
     * @param array{
     *     alarmModelName: string,
     *     keyValue?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
