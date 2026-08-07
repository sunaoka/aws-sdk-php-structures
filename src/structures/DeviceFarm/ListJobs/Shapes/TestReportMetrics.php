<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $testsTotal
 * @property int|null $testsPassed
 * @property int|null $testsFailed
 * @property int|null $testsSkipped
 * @property int|null $testsErrored
 * @property int|null $testsOther
 * @property double|null $testsPassedPercentage
 * @property double|null $totalTestExecutionDurationSeconds
 * @property double|null $medianTestExecutionDurationSeconds
 */
class TestReportMetrics extends Shape
{
    /**
     * @param array{
     *     testsTotal?: int|null,
     *     testsPassed?: int|null,
     *     testsFailed?: int|null,
     *     testsSkipped?: int|null,
     *     testsErrored?: int|null,
     *     testsOther?: int|null,
     *     testsPassedPercentage?: double|null,
     *     totalTestExecutionDurationSeconds?: double|null,
     *     medianTestExecutionDurationSeconds?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
