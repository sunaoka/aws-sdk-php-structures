<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $jobsTotal
 * @property int|null $jobsPassed
 * @property int|null $jobsFailed
 * @property int|null $jobsSkipped
 * @property int|null $jobsErrored
 * @property int|null $jobsStopped
 * @property double|null $jobsPassedPercentage
 * @property double|null $totalJobExecutionDurationSeconds
 * @property double|null $averageJobExecutionDurationSeconds
 * @property double|null $medianJobExecutionDurationSeconds
 */
class JobReportMetrics extends Shape
{
    /**
     * @param array{
     *     jobsTotal?: int|null,
     *     jobsPassed?: int|null,
     *     jobsFailed?: int|null,
     *     jobsSkipped?: int|null,
     *     jobsErrored?: int|null,
     *     jobsStopped?: int|null,
     *     jobsPassedPercentage?: double|null,
     *     totalJobExecutionDurationSeconds?: double|null,
     *     averageJobExecutionDurationSeconds?: double|null,
     *     medianJobExecutionDurationSeconds?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
