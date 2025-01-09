<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelId
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeScheduleRequest extends Request
{
    /**
     * @param array{
     *     ChannelId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
