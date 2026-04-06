<?php

namespace Sunaoka\Aws\Structures\Deadline\GetStep;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property Shapes\DependencyCounts|null $dependencyCounts
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property 'CREATE_COMPLETE'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'UPDATE_SUCCEEDED' $lifecycleStatus
 * @property string|null $lifecycleStatusMessage
 * @property string $name
 * @property Shapes\ParameterSpace|null $parameterSpace
 * @property Shapes\StepRequiredCapabilities|null $requiredCapabilities
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property string $stepId
 * @property 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING'|null $targetTaskRunStatus
 * @property 'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE' $taskRunStatus
 * @property array<'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE', int> $taskRunStatusCounts
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class GetStepResponse extends Response
{
}
