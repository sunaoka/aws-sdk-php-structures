<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\GetSuiteRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $testCaseRunId
 * @property string $testCaseDefinitionId
 * @property string $testCaseDefinitionName
 * @property 'PASS'|'FAIL'|'CANCELED'|'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|'PASS_WITH_WARNINGS'|'ERROR' $status
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $logUrl
 * @property string $warnings
 * @property string $failure
 * @property list<TestCaseScenario> $testScenarios
 */
class TestCaseRun extends Shape
{
    /**
     * @param array{
     *     testCaseRunId?: string,
     *     testCaseDefinitionId?: string,
     *     testCaseDefinitionName?: string,
     *     status?: 'PASS'|'FAIL'|'CANCELED'|'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|'PASS_WITH_WARNINGS'|'ERROR',
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     logUrl?: string,
     *     warnings?: string,
     *     failure?: string,
     *     testScenarios?: list<TestCaseScenario>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
