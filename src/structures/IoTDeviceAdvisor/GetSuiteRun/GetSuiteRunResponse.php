<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\GetSuiteRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $suiteDefinitionId
 * @property string $suiteDefinitionVersion
 * @property string $suiteRunId
 * @property string $suiteRunArn
 * @property Shapes\SuiteRunConfiguration $suiteRunConfiguration
 * @property Shapes\TestResult $testResult
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property 'PASS'|'FAIL'|'CANCELED'|'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|'PASS_WITH_WARNINGS'|'ERROR' $status
 * @property string $errorReason
 * @property array<string, string> $tags
 */
class GetSuiteRunResponse extends Response
{
}
