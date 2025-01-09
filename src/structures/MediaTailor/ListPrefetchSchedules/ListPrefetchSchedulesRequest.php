<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListPrefetchSchedules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $PlaybackConfigurationName
 * @property string $StreamId
 */
class ListPrefetchSchedulesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     PlaybackConfigurationName: string,
     *     StreamId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
