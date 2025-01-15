<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\ListSuiteRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $suiteDefinitionId
 * @property string|null $suiteDefinitionVersion
 * @property string|null $suiteDefinitionName
 * @property string|null $suiteRunId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $endAt
 * @property 'PASS'|'FAIL'|'CANCELED'|'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|'PASS_WITH_WARNINGS'|'ERROR'|null $status
 * @property int<0, 500>|null $passed
 * @property int<0, 500>|null $failed
 */
class SuiteRunInformation extends Shape
{
    /**
     * @param array{
     *     suiteDefinitionId?: string|null,
     *     suiteDefinitionVersion?: string|null,
     *     suiteDefinitionName?: string|null,
     *     suiteRunId?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     endAt?: \Aws\Api\DateTimeResult|null,
     *     status?: 'PASS'|'FAIL'|'CANCELED'|'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|'PASS_WITH_WARNINGS'|'ERROR'|null,
     *     passed?: int<0, 500>|null,
     *     failed?: int<0, 500>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
