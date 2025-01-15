<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestRunTestCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $testCaseId
 * @property int $testCaseVersion
 * @property string $testRunId
 * @property 'Success'|'Running'|'Failed' $status
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult $runStartTime
 * @property \Aws\Api\DateTimeResult|null $runEndTime
 */
class TestCaseRunSummary extends Shape
{
    /**
     * @param array{
     *     testCaseId: string,
     *     testCaseVersion: int,
     *     testRunId: string,
     *     status: 'Success'|'Running'|'Failed',
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
