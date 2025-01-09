<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateApplicationSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property CampaignHook $CampaignHook
 * @property string $LastModifiedDate
 * @property CampaignLimits $Limits
 * @property QuietTime $QuietTime
 * @property ApplicationSettingsJourneyLimits $JourneyLimits
 */
class ApplicationSettingsResource extends Shape
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     CampaignHook?: CampaignHook,
     *     LastModifiedDate?: string,
     *     Limits?: CampaignLimits,
     *     QuietTime?: QuietTime,
     *     JourneyLimits?: ApplicationSettingsJourneyLimits
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
