<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\GetSuiteRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $testCaseScenarioId
 * @property 'Advanced'|'Basic'|null $testCaseScenarioType
 * @property 'PASS'|'FAIL'|'CANCELED'|'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|'PASS_WITH_WARNINGS'|'ERROR'|null $status
 * @property string|null $failure
 * @property string|null $systemMessage
 */
class TestCaseScenario extends Shape
{
    /**
     * @param array{
     *     testCaseScenarioId?: string|null,
     *     testCaseScenarioType?: 'Advanced'|'Basic'|null,
     *     status?: 'PASS'|'FAIL'|'CANCELED'|'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|'PASS_WITH_WARNINGS'|'ERROR'|null,
     *     failure?: string|null,
     *     systemMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
