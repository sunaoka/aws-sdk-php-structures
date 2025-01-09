<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListPrefetchSchedules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property string $PlaybackConfigurationName
 * @property string $StreamId
 */
class ListPrefetchSchedulesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>,
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
