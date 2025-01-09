<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeReportPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReportPlanArn
 * @property string $ReportPlanName
 * @property string $ReportPlanDescription
 * @property ReportSetting $ReportSetting
 * @property ReportDeliveryChannel $ReportDeliveryChannel
 * @property string $DeploymentStatus
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastAttemptedExecutionTime
 * @property \Aws\Api\DateTimeResult $LastSuccessfulExecutionTime
 */
class ReportPlan extends Shape
{
    /**
     * @param array{
     *     ReportPlanArn?: string,
     *     ReportPlanName?: string,
     *     ReportPlanDescription?: string,
     *     ReportSetting?: ReportSetting,
     *     ReportDeliveryChannel?: ReportDeliveryChannel,
     *     DeploymentStatus?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastAttemptedExecutionTime?: \Aws\Api\DateTimeResult,
     *     LastSuccessfulExecutionTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
