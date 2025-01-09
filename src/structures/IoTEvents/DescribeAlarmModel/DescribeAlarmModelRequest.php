<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeAlarmModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $alarmModelName
 * @property string $alarmModelVersion
 */
class DescribeAlarmModelRequest extends Request
{
    /**
     * @param array{
     *     alarmModelName: string,
     *     alarmModelVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
