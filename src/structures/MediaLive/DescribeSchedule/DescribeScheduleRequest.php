<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelId
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeScheduleRequest extends Request
{
    /**
     * @param array{
     *     ChannelId: string,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
