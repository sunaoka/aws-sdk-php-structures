<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateOnlineEvaluationConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $onlineEvaluationConfigArn
 * @property string $onlineEvaluationConfigId
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'ACTIVE'|'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING' $status
 * @property 'ENABLED'|'DISABLED' $executionStatus
 * @property string|null $failureReason
 */
class UpdateOnlineEvaluationConfigResponse extends Response
{
}
