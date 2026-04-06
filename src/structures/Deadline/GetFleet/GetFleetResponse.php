<?php

namespace Sunaoka\Aws\Structures\Deadline\GetFleet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $fleetId
 * @property string $farmId
 * @property string $displayName
 * @property string|null $description
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED' $status
 * @property 'GROWING'|'STEADY'|'SHRINKING'|null $autoScalingStatus
 * @property int|null $targetWorkerCount
 * @property int $workerCount
 * @property int<0, 2147483647> $minWorkerCount
 * @property int<0, 2147483647> $maxWorkerCount
 * @property Shapes\FleetConfiguration $configuration
 * @property Shapes\FleetCapabilities|null $capabilities
 * @property string $roleArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class GetFleetResponse extends Response
{
}
