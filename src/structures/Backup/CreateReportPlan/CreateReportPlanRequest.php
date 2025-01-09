<?php

namespace Sunaoka\Aws\Structures\Backup\CreateReportPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReportPlanName
 * @property string $ReportPlanDescription
 * @property Shapes\ReportDeliveryChannel $ReportDeliveryChannel
 * @property Shapes\ReportSetting $ReportSetting
 * @property array<string, string> $ReportPlanTags
 * @property string $IdempotencyToken
 */
class CreateReportPlanRequest extends Request
{
    /**
     * @param array{
     *     ReportPlanName: string,
     *     ReportPlanDescription?: string,
     *     ReportDeliveryChannel: Shapes\ReportDeliveryChannel,
     *     ReportSetting: Shapes\ReportSetting,
     *     ReportPlanTags?: array<string, string>,
     *     IdempotencyToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
