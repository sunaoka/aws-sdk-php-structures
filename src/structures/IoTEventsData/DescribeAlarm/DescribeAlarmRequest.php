<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\DescribeAlarm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $alarmModelName
 * @property string $keyValue
 */
class DescribeAlarmRequest extends Request
{
    /**
     * @param array{
     *     alarmModelName: string,
     *     keyValue?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
