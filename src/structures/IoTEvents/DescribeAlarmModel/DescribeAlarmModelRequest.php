<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeAlarmModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $alarmModelName
 * @property string|null $alarmModelVersion
 */
class DescribeAlarmModelRequest extends Request
{
    /**
     * @param array{
     *     alarmModelName: string,
     *     alarmModelVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
