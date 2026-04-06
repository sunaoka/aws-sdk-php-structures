<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeMonitoringSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScheduleExpression
 * @property string|null $DataAnalysisStartTime
 * @property string|null $DataAnalysisEndTime
 */
class ScheduleConfig extends Shape
{
    /**
     * @param array{
     *     ScheduleExpression: string,
     *     DataAnalysisStartTime?: string|null,
     *     DataAnalysisEndTime?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
