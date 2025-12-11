<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListOnlineEvaluationConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $onlineEvaluationConfigArn
 * @property string $onlineEvaluationConfigId
 * @property string $onlineEvaluationConfigName
 * @property string|null $description
 * @property 'ACTIVE'|'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING' $status
 * @property 'ENABLED'|'DISABLED' $executionStatus
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string|null $failureReason
 */
class OnlineEvaluationConfigSummary extends Shape
{
    /**
     * @param array{
     *     onlineEvaluationConfigArn: string,
     *     onlineEvaluationConfigId: string,
     *     onlineEvaluationConfigName: string,
     *     description?: string|null,
     *     status: 'ACTIVE'|'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING',
     *     executionStatus: 'ENABLED'|'DISABLED',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     failureReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
