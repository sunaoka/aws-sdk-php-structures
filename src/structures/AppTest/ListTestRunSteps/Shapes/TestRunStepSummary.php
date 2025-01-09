<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestRunSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stepName
 * @property string $testRunId
 * @property string $testCaseId
 * @property int $testCaseVersion
 * @property string $testSuiteId
 * @property int $testSuiteVersion
 * @property bool $beforeStep
 * @property bool $afterStep
 * @property 'Success'|'Failed'|'Running' $status
 * @property string $statusReason
 * @property \Aws\Api\DateTimeResult $runStartTime
 * @property \Aws\Api\DateTimeResult $runEndTime
 */
class TestRunStepSummary extends Shape
{
    /**
     * @param array{
     *     stepName: string,
     *     testRunId: string,
     *     testCaseId?: string,
     *     testCaseVersion?: int,
     *     testSuiteId?: string,
     *     testSuiteVersion?: int,
     *     beforeStep?: bool,
     *     afterStep?: bool,
     *     status: 'Success'|'Failed'|'Running',
     *     statusReason?: string,
     *     runStartTime: \Aws\Api\DateTimeResult,
     *     runEndTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
