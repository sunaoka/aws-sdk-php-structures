<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateMonitoringSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 */
class MonitoringStatisticsResource extends Shape
{
    /**
     * @param array{S3Uri?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
