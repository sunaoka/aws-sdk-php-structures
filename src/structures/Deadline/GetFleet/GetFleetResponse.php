<?php

namespace Sunaoka\Aws\Structures\Deadline\GetFleet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'GROWING'|'STEADY'|'SHRINKING'|null $autoScalingStatus
 * @property Shapes\FleetCapabilities|null $capabilities
 * @property Shapes\FleetConfiguration $configuration
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string|null $description
 * @property string $displayName
 * @property string $farmId
 * @property string $fleetId
 * @property int<0, 2147483647> $maxWorkerCount
 * @property int<0, 2147483647> $minWorkerCount
 * @property string $roleArn
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED' $status
 * @property int|null $targetWorkerCount
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property int $workerCount
 */
class GetFleetResponse extends Response
{
}
