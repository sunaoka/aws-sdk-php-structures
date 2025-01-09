<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModelDashboardIndicatorAction $ModelDashboardIndicator
 */
class MonitoringAlertActions extends Shape
{
    /**
     * @param array{ModelDashboardIndicator?: ModelDashboardIndicatorAction} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
