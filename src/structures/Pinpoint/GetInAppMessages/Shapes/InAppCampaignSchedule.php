<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetInAppMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EndDate
 * @property CampaignEventFilter|null $EventFilter
 * @property QuietTime|null $QuietTime
 */
class InAppCampaignSchedule extends Shape
{
    /**
     * @param array{
     *     EndDate?: string|null,
     *     EventFilter?: CampaignEventFilter|null,
     *     QuietTime?: QuietTime|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
