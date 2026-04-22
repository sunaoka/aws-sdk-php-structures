<?php

namespace Sunaoka\Aws\Structures\EMRServerless\ListSessions\Shapes;

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
 */
class SessionSummary extends Shape
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
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
