<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\GetSuiteRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $testCaseScenarioId
 * @property 'Advanced'|'Basic' $testCaseScenarioType
 * @property 'PASS'|'FAIL'|'CANCELED'|'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|'PASS_WITH_WARNINGS'|'ERROR' $status
 * @property string $failure
 * @property string $systemMessage
 */
class TestCaseScenario extends Shape
{
    /**
     * @param array{
     *     testCaseScenarioId?: string,
     *     testCaseScenarioType?: 'Advanced'|'Basic',
     *     status?: 'PASS'|'FAIL'|'CANCELED'|'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|'PASS_WITH_WARNINGS'|'ERROR',
     *     failure?: string,
     *     systemMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
