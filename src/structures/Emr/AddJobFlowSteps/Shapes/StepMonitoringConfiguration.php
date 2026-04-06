<?php

namespace Sunaoka\Aws\Structures\Emr\AddJobFlowSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3MonitoringConfiguration|null $S3MonitoringConfiguration
 */
class StepMonitoringConfiguration extends Shape
{
    /**
     * @param array{S3MonitoringConfiguration?: S3MonitoringConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
