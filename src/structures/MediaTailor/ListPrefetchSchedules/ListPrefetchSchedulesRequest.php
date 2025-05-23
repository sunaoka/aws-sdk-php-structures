<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListPrefetchSchedules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property string $PlaybackConfigurationName
 * @property 'SINGLE'|'RECURRING'|'ALL'|null $ScheduleType
 * @property string|null $StreamId
 */
class ListPrefetchSchedulesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     PlaybackConfigurationName: string,
     *     ScheduleType?: 'SINGLE'|'RECURRING'|'ALL'|null,
     *     StreamId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
