<?php

namespace Sunaoka\Aws\Structures\EMRServerless\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationId
 * @property string $sessionId
 * @property string $arn
 * @property string|null $name
 * @property 'SUBMITTED'|'STARTING'|'STARTED'|'IDLE'|'BUSY'|'FAILED'|'TERMINATING'|'TERMINATED' $state
 * @property string $stateDetails
 * @property string $releaseLabel
 * @property string $executionRoleArn
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property \Aws\Api\DateTimeResult|null $idleSince
 * @property SessionConfigurationOverrides|null $configurationOverrides
 * @property NetworkConfiguration|null $networkConfiguration
 * @property int<0, 1000000>|null $idleTimeoutMinutes
 * @property array<string, string>|null $tags
 * @property TotalResourceUtilization|null $totalResourceUtilization
 * @property ResourceUtilization|null $billedResourceUtilization
 * @property int|null $totalExecutionDurationSeconds
 */
class Session extends Shape
{
    /**
     * @param array{
     *     applicationId: string,
     *     sessionId: string,
     *     arn: string,
     *     name?: string|null,
     *     state: 'SUBMITTED'|'STARTING'|'STARTED'|'IDLE'|'BUSY'|'FAILED'|'TERMINATING'|'TERMINATED',
     *     stateDetails: string,
     *     releaseLabel: string,
     *     executionRoleArn: string,
     *     createdBy: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     idleSince?: \Aws\Api\DateTimeResult|null,
     *     configurationOverrides?: SessionConfigurationOverrides|null,
     *     networkConfiguration?: NetworkConfiguration|null,
     *     idleTimeoutMinutes?: int<0, 1000000>|null,
     *     tags?: array<string, string>|null,
     *     totalResourceUtilization?: TotalResourceUtilization|null,
     *     billedResourceUtilization?: ResourceUtilization|null,
     *     totalExecutionDurationSeconds?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
