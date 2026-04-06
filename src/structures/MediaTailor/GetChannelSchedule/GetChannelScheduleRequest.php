<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetChannelSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Audience
 * @property string $ChannelName
 * @property string|null $DurationMinutes
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class GetChannelScheduleRequest extends Request
{
    /**
     * @param array{
     *     Audience?: string|null,
     *     ChannelName: string,
     *     DurationMinutes?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
