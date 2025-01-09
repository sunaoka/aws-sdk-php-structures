<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetInAppMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CampaignId
 * @property int $DailyCap
 * @property InAppMessage $InAppMessage
 * @property int $Priority
 * @property InAppCampaignSchedule $Schedule
 * @property int $SessionCap
 * @property int $TotalCap
 * @property string $TreatmentId
 */
class InAppMessageCampaign extends Shape
{
    /**
     * @param array{
     *     CampaignId?: string,
     *     DailyCap?: int,
     *     InAppMessage?: InAppMessage,
     *     Priority?: int,
     *     Schedule?: InAppCampaignSchedule,
     *     SessionCap?: int,
     *     TotalCap?: int,
     *     TreatmentId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
