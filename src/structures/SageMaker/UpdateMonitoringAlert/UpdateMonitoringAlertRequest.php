<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateMonitoringAlert;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitoringScheduleName
 * @property string $MonitoringAlertName
 * @property int $DatapointsToAlert
 * @property int $EvaluationPeriod
 */
class UpdateMonitoringAlertRequest extends Request
{
    /**
     * @param array{
     *     MonitoringScheduleName: string,
     *     MonitoringAlertName: string,
     *     DatapointsToAlert: int,
     *     EvaluationPeriod: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
