<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListMonitoringAlerts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModelDashboardIndicatorAction|null $ModelDashboardIndicator
 */
class MonitoringAlertActions extends Shape
{
    /**
     * @param array{ModelDashboardIndicator?: ModelDashboardIndicatorAction|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
