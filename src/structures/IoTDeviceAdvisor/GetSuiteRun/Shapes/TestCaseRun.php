<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\GetSuiteRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $testCaseRunId
 * @property string|null $testCaseDefinitionId
 * @property string|null $testCaseDefinitionName
 * @property 'PASS'|'FAIL'|'CANCELED'|'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|'PASS_WITH_WARNINGS'|'ERROR'|null $status
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string|null $logUrl
 * @property string|null $warnings
 * @property string|null $failure
 * @property list<TestCaseScenario>|null $testScenarios
 */
class TestCaseRun extends Shape
{
    /**
     * @param array{
     *     testCaseRunId?: string|null,
     *     testCaseDefinitionId?: string|null,
     *     testCaseDefinitionName?: string|null,
     *     status?: 'PASS'|'FAIL'|'CANCELED'|'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|'PASS_WITH_WARNINGS'|'ERROR'|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     logUrl?: string|null,
     *     warnings?: string|null,
     *     failure?: string|null,
     *     testScenarios?: list<TestCaseScenario>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
