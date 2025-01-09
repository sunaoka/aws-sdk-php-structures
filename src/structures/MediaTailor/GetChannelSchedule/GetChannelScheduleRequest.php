<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetChannelSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Audience
 * @property string $ChannelName
 * @property string $DurationMinutes
 * @property int $MaxResults
 * @property string $NextToken
 */
class GetChannelScheduleRequest extends Request
{
    /**
     * @param array{
     *     Audience?: string,
     *     ChannelName: string,
     *     DurationMinutes?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
