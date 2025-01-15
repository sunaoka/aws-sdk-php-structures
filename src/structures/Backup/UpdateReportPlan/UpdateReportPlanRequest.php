<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateReportPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReportPlanName
 * @property string|null $ReportPlanDescription
 * @property Shapes\ReportDeliveryChannel|null $ReportDeliveryChannel
 * @property Shapes\ReportSetting|null $ReportSetting
 * @property string|null $IdempotencyToken
 */
class UpdateReportPlanRequest extends Request
{
    /**
     * @param array{
     *     ReportPlanName: string,
     *     ReportPlanDescription?: string|null,
     *     ReportDeliveryChannel?: Shapes\ReportDeliveryChannel|null,
     *     ReportSetting?: Shapes\ReportSetting|null,
     *     IdempotencyToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
