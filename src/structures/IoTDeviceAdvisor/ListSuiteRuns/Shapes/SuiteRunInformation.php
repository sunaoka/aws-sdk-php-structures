<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\ListSuiteRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $suiteDefinitionId
 * @property string $suiteDefinitionVersion
 * @property string $suiteDefinitionName
 * @property string $suiteRunId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult $endAt
 * @property 'PASS'|'FAIL'|'CANCELED'|'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|'PASS_WITH_WARNINGS'|'ERROR' $status
 * @property int $passed
 * @property int $failed
 */
class SuiteRunInformation extends Shape
{
    /**
     * @param array{
     *     suiteDefinitionId?: string,
     *     suiteDefinitionVersion?: string,
     *     suiteDefinitionName?: string,
     *     suiteRunId?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     startedAt?: \Aws\Api\DateTimeResult,
     *     endAt?: \Aws\Api\DateTimeResult,
     *     status?: 'PASS'|'FAIL'|'CANCELED'|'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|'PASS_WITH_WARNINGS'|'ERROR',
     *     passed?: int,
     *     failed?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
