<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $testRunId
 * @property string $testRunArn
 * @property string $testSuiteId
 * @property int $testSuiteVersion
 * @property string|null $testConfigurationId
 * @property int|null $testConfigurationVersion
 * @property 'Success'|'Running'|'Failed'|'Deleting' $status
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult $runStartTime
 * @property \Aws\Api\DateTimeResult|null $runEndTime
 */
class TestRunSummary extends Shape
{
    /**
     * @param array{
     *     testRunId: string,
     *     testRunArn: string,
     *     testSuiteId: string,
     *     testSuiteVersion: int,
     *     testConfigurationId?: string|null,
     *     testConfigurationVersion?: int|null,
     *     status: 'Success'|'Running'|'Failed'|'Deleting',
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
