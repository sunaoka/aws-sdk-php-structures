<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateOnlineEvaluationConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $onlineEvaluationConfigArn
 * @property string $onlineEvaluationConfigId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property Shapes\OutputConfig|null $outputConfig
 * @property 'ACTIVE'|'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING' $status
 * @property 'ENABLED'|'DISABLED' $executionStatus
 * @property string|null $failureReason
 */
class CreateOnlineEvaluationConfigResponse extends Response
{
}
