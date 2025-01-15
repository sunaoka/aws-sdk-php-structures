<?php

namespace Sunaoka\Aws\Structures\Backup\CreateReportPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReportPlanName
 * @property string|null $ReportPlanDescription
 * @property Shapes\ReportDeliveryChannel $ReportDeliveryChannel
 * @property Shapes\ReportSetting $ReportSetting
 * @property array<string, string>|null $ReportPlanTags
 * @property string|null $IdempotencyToken
 */
class CreateReportPlanRequest extends Request
{
    /**
     * @param array{
     *     ReportPlanName: string,
     *     ReportPlanDescription?: string|null,
     *     ReportDeliveryChannel: Shapes\ReportDeliveryChannel,
     *     ReportSetting: Shapes\ReportSetting,
     *     ReportPlanTags?: array<string, string>|null,
     *     IdempotencyToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
