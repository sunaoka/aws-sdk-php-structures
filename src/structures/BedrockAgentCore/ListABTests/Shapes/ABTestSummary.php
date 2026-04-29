<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListABTests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $abTestId
 * @property string $abTestArn
 * @property string $name
 * @property 'CREATING'|'ACTIVE'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED'|'FAILED' $status
 * @property 'PAUSED'|'RUNNING'|'STOPPED'|'NOT_STARTED' $executionStatus
 * @property string|null $description
 * @property string|null $gatewayArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class ABTestSummary extends Shape
{
    /**
     * @param array{
     *     abTestId: string,
     *     abTestArn: string,
     *     name: string,
     *     status: 'CREATING'|'ACTIVE'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED'|'FAILED',
     *     executionStatus: 'PAUSED'|'RUNNING'|'STOPPED'|'NOT_STARTED',
     *     description?: string|null,
     *     gatewayArn?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
