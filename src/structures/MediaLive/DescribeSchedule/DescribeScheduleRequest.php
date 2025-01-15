<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelId
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeScheduleRequest extends Request
{
    /**
     * @param array{
     *     ChannelId: string,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
