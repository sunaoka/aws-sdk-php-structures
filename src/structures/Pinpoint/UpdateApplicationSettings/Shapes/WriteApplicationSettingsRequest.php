<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateApplicationSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CampaignHook $CampaignHook
 * @property bool $CloudWatchMetricsEnabled
 * @property CampaignLimits $Limits
 * @property QuietTime $QuietTime
 * @property ApplicationSettingsJourneyLimits $JourneyLimits
 */
class WriteApplicationSettingsRequest extends Shape
{
    /**
     * @param array{
     *     CampaignHook?: CampaignHook,
     *     CloudWatchMetricsEnabled?: bool,
     *     Limits?: CampaignLimits,
     *     QuietTime?: QuietTime,
     *     JourneyLimits?: ApplicationSettingsJourneyLimits
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
