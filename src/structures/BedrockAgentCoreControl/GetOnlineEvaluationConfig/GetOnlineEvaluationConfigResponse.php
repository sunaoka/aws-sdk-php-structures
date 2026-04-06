<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetOnlineEvaluationConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $onlineEvaluationConfigArn
 * @property string $onlineEvaluationConfigId
 * @property string $onlineEvaluationConfigName
 * @property string|null $description
 * @property Shapes\Rule $rule
 * @property Shapes\DataSourceConfig $dataSourceConfig
 * @property list<Shapes\EvaluatorReference> $evaluators
 * @property Shapes\OutputConfig|null $outputConfig
 * @property string|null $evaluationExecutionRoleArn
 * @property 'ACTIVE'|'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING' $status
 * @property 'ENABLED'|'DISABLED' $executionStatus
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string|null $failureReason
 */
class GetOnlineEvaluationConfigResponse extends Response
{
}
