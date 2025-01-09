<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\ListAlarms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $alarmModelName
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 */
class ListAlarmsRequest extends Request
{
    /**
     * @param array{
     *     alarmModelName: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 250>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
