<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateApplicationSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CampaignHook|null $CampaignHook
 * @property bool|null $CloudWatchMetricsEnabled
 * @property CampaignLimits|null $Limits
 * @property QuietTime|null $QuietTime
 * @property ApplicationSettingsJourneyLimits|null $JourneyLimits
 */
class WriteApplicationSettingsRequest extends Shape
{
    /**
     * @param array{
     *     CampaignHook?: CampaignHook|null,
     *     CloudWatchMetricsEnabled?: bool|null,
     *     Limits?: CampaignLimits|null,
     *     QuietTime?: QuietTime|null,
     *     JourneyLimits?: ApplicationSettingsJourneyLimits|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
