<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestRunSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stepName
 * @property string $testRunId
 * @property string|null $testCaseId
 * @property int|null $testCaseVersion
 * @property string|null $testSuiteId
 * @property int|null $testSuiteVersion
 * @property bool|null $beforeStep
 * @property bool|null $afterStep
 * @property 'Success'|'Failed'|'Running' $status
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult $runStartTime
 * @property \Aws\Api\DateTimeResult|null $runEndTime
 */
class TestRunStepSummary extends Shape
{
    /**
     * @param array{
     *     stepName: string,
     *     testRunId: string,
     *     testCaseId?: string|null,
     *     testCaseVersion?: int|null,
     *     testSuiteId?: string|null,
     *     testSuiteVersion?: int|null,
     *     beforeStep?: bool|null,
     *     afterStep?: bool|null,
     *     status: 'Success'|'Failed'|'Running',
     *     statusReason?: string|null,
     *     runStartTime: \Aws\Api\DateTimeResult,
     *     runEndTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
