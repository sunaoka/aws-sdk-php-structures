<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaignVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndTime
 * @property CampaignEventFilter $EventFilter
 * @property 'ONCE'|'HOURLY'|'DAILY'|'WEEKLY'|'MONTHLY'|'EVENT'|'IN_APP_EVENT' $Frequency
 * @property bool $IsLocalTime
 * @property QuietTime $QuietTime
 * @property string $StartTime
 * @property string $Timezone
 */
class Schedule extends Shape
{
    /**
     * @param array{
     *     EndTime?: string,
     *     EventFilter?: CampaignEventFilter,
     *     Frequency?: 'ONCE'|'HOURLY'|'DAILY'|'WEEKLY'|'MONTHLY'|'EVENT'|'IN_APP_EVENT',
     *     IsLocalTime?: bool,
     *     QuietTime?: QuietTime,
     *     StartTime: string,
     *     Timezone?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
