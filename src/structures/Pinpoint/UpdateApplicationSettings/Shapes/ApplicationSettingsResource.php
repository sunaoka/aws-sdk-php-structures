<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateApplicationSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property CampaignHook|null $CampaignHook
 * @property string|null $LastModifiedDate
 * @property CampaignLimits|null $Limits
 * @property QuietTime|null $QuietTime
 * @property ApplicationSettingsJourneyLimits|null $JourneyLimits
 */
class ApplicationSettingsResource extends Shape
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     CampaignHook?: CampaignHook|null,
     *     LastModifiedDate?: string|null,
     *     Limits?: CampaignLimits|null,
     *     QuietTime?: QuietTime|null,
     *     JourneyLimits?: ApplicationSettingsJourneyLimits|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
