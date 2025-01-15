<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetInAppMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CampaignId
 * @property int|null $DailyCap
 * @property InAppMessage|null $InAppMessage
 * @property int|null $Priority
 * @property InAppCampaignSchedule|null $Schedule
 * @property int|null $SessionCap
 * @property int|null $TotalCap
 * @property string|null $TreatmentId
 */
class InAppMessageCampaign extends Shape
{
    /**
     * @param array{
     *     CampaignId?: string|null,
     *     DailyCap?: int|null,
     *     InAppMessage?: InAppMessage|null,
     *     Priority?: int|null,
     *     Schedule?: InAppCampaignSchedule|null,
     *     SessionCap?: int|null,
     *     TotalCap?: int|null,
     *     TreatmentId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
