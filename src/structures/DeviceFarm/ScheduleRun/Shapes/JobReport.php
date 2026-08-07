<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ScheduleRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $message
 * @property JobReportMetrics|null $metrics
 * @property string|null $jobDetailsUrl
 */
class JobReport extends Shape
{
    /**
     * @param array{
     *     message?: string|null,
     *     metrics?: JobReportMetrics|null,
     *     jobDetailsUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
