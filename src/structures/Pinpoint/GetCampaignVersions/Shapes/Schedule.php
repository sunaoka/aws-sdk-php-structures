<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaignVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EndTime
 * @property CampaignEventFilter|null $EventFilter
 * @property 'ONCE'|'HOURLY'|'DAILY'|'WEEKLY'|'MONTHLY'|'EVENT'|'IN_APP_EVENT'|null $Frequency
 * @property bool|null $IsLocalTime
 * @property QuietTime|null $QuietTime
 * @property string $StartTime
 * @property string|null $Timezone
 */
class Schedule extends Shape
{
    /**
     * @param array{
     *     EndTime?: string|null,
     *     EventFilter?: CampaignEventFilter|null,
     *     Frequency?: 'ONCE'|'HOURLY'|'DAILY'|'WEEKLY'|'MONTHLY'|'EVENT'|'IN_APP_EVENT'|null,
     *     IsLocalTime?: bool|null,
     *     QuietTime?: QuietTime|null,
     *     StartTime: string,
     *     Timezone?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
