<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestRunTestCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $testCaseId
 * @property int $testCaseVersion
 * @property string $testRunId
 * @property 'Success'|'Running'|'Failed' $status
 * @property string $statusReason
 * @property \Aws\Api\DateTimeResult $runStartTime
 * @property \Aws\Api\DateTimeResult $runEndTime
 */
class TestCaseRunSummary extends Shape
{
    /**
     * @param array{
     *     testCaseId: string,
     *     testCaseVersion: int,
     *     testRunId: string,
     *     status: 'Success'|'Running'|'Failed',
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
