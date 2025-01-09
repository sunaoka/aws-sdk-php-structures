<?php

namespace Sunaoka\Aws\Structures\Deadline\GetFleet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $fleetId
 * @property string $farmId
 * @property string $displayName
 * @property string $description
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED' $status
 * @property 'GROWING'|'STEADY'|'SHRINKING' $autoScalingStatus
 * @property int $targetWorkerCount
 * @property int $workerCount
 * @property int<0, 2147483647> $minWorkerCount
 * @property int<0, 2147483647> $maxWorkerCount
 * @property Shapes\FleetConfiguration $configuration
 * @property Shapes\FleetCapabilities $capabilities
 * @property string $roleArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 */
class GetFleetResponse extends Response
{
}
