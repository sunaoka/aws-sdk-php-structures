<?php

namespace Sunaoka\Aws\Structures\Deadline\GetStep;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $stepId
 * @property string $name
 * @property 'CREATE_COMPLETE'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'UPDATE_SUCCEEDED' $lifecycleStatus
 * @property string|null $lifecycleStatusMessage
 * @property 'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE' $taskRunStatus
 * @property array<'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE', int> $taskRunStatusCounts
 * @property int<0, 2147483647>|null $taskFailureRetryCount
 * @property 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING'|null $targetTaskRunStatus
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property Shapes\DependencyCounts|null $dependencyCounts
 * @property Shapes\StepRequiredCapabilities|null $requiredCapabilities
 * @property Shapes\ParameterSpace|null $parameterSpace
 * @property string|null $description
 */
class GetStepResponse extends Response
{
}
