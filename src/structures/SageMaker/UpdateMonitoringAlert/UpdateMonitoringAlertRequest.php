<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateMonitoringAlert;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitoringScheduleName
 * @property string $MonitoringAlertName
 * @property int<1, 100> $DatapointsToAlert
 * @property int<1, 100> $EvaluationPeriod
 */
class UpdateMonitoringAlertRequest extends Request
{
    /**
     * @param array{
     *     MonitoringScheduleName: string,
     *     MonitoringAlertName: string,
     *     DatapointsToAlert: int<1, 100>,
     *     EvaluationPeriod: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
