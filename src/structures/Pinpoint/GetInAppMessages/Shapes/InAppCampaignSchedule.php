<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetInAppMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndDate
 * @property CampaignEventFilter $EventFilter
 * @property QuietTime $QuietTime
 */
class InAppCampaignSchedule extends Shape
{
    /**
     * @param array{
     *     EndDate?: string,
     *     EventFilter?: CampaignEventFilter,
     *     QuietTime?: QuietTime
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
