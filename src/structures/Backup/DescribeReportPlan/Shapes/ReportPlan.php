<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeReportPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReportPlanArn
 * @property string|null $ReportPlanName
 * @property string|null $ReportPlanDescription
 * @property ReportSetting|null $ReportSetting
 * @property ReportDeliveryChannel|null $ReportDeliveryChannel
 * @property string|null $DeploymentStatus
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastAttemptedExecutionTime
 * @property \Aws\Api\DateTimeResult|null $LastSuccessfulExecutionTime
 */
class ReportPlan extends Shape
{
    /**
     * @param array{
     *     ReportPlanArn?: string|null,
     *     ReportPlanName?: string|null,
     *     ReportPlanDescription?: string|null,
     *     ReportSetting?: ReportSetting|null,
     *     ReportDeliveryChannel?: ReportDeliveryChannel|null,
     *     DeploymentStatus?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastAttemptedExecutionTime?: \Aws\Api\DateTimeResult|null,
     *     LastSuccessfulExecutionTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
