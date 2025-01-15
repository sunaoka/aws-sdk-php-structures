<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\GetSuiteRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $suiteDefinitionId
 * @property string|null $suiteDefinitionVersion
 * @property string|null $suiteRunId
 * @property string|null $suiteRunArn
 * @property Shapes\SuiteRunConfiguration|null $suiteRunConfiguration
 * @property Shapes\TestResult|null $testResult
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property 'PASS'|'FAIL'|'CANCELED'|'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|'PASS_WITH_WARNINGS'|'ERROR'|null $status
 * @property string|null $errorReason
 * @property array<string, string>|null $tags
 */
class GetSuiteRunResponse extends Response
{
}
