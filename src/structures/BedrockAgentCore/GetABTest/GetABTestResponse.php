<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetABTest;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $abTestId
 * @property string $abTestArn
 * @property string $name
 * @property string|null $description
 * @property 'CREATING'|'ACTIVE'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED'|'FAILED' $status
 * @property 'PAUSED'|'RUNNING'|'STOPPED'|'NOT_STARTED' $executionStatus
 * @property string $gatewayArn
 * @property list<Shapes\Variant> $variants
 * @property Shapes\GatewayFilter|null $gatewayFilter
 * @property Shapes\ABTestEvaluationConfig $evaluationConfig
 * @property string|null $roleArn
 * @property string|null $currentRunId
 * @property list<string>|null $errorDetails
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $stoppedAt
 * @property \Aws\Api\DateTimeResult|null $maxDurationExpiresAt
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property Shapes\ABTestResults|null $results
 */
class GetABTestResponse extends Response
{
}
