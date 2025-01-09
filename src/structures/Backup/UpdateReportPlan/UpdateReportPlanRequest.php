<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateReportPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReportPlanName
 * @property string $ReportPlanDescription
 * @property Shapes\ReportDeliveryChannel $ReportDeliveryChannel
 * @property Shapes\ReportSetting $ReportSetting
 * @property string $IdempotencyToken
 */
class UpdateReportPlanRequest extends Request
{
    /**
     * @param array{
     *     ReportPlanName: string,
     *     ReportPlanDescription?: string,
     *     ReportDeliveryChannel?: Shapes\ReportDeliveryChannel,
     *     ReportSetting?: Shapes\ReportSetting,
     *     IdempotencyToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
