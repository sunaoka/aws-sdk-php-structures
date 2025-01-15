<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListAlarmModelVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $alarmModelName
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListAlarmModelVersionsRequest extends Request
{
    /**
     * @param array{
     *     alarmModelName: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
