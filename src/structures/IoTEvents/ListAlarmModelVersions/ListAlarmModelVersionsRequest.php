<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListAlarmModelVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $alarmModelName
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 */
class ListAlarmModelVersionsRequest extends Request
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
