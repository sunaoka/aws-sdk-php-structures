<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $testRunId
 * @property string $testRunArn
 * @property string $testSuiteId
 * @property int $testSuiteVersion
 * @property string $testConfigurationId
 * @property int $testConfigurationVersion
 * @property 'Success'|'Running'|'Failed'|'Deleting' $status
 * @property string $statusReason
 * @property \Aws\Api\DateTimeResult $runStartTime
 * @property \Aws\Api\DateTimeResult $runEndTime
 */
class TestRunSummary extends Shape
{
    /**
     * @param array{
     *     testRunId: string,
     *     testRunArn: string,
     *     testSuiteId: string,
     *     testSuiteVersion: int,
     *     testConfigurationId?: string,
     *     testConfigurationVersion?: int,
     *     status: 'Success'|'Running'|'Failed'|'Deleting',
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
