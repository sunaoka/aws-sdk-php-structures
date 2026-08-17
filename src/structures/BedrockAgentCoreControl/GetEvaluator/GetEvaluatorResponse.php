<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetEvaluator;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $evaluatorArn
 * @property string $evaluatorId
 * @property string $evaluatorName
 * @property string|null $description
 * @property Shapes\EvaluatorConfig $evaluatorConfig
 * @property 'Builtin'|'ThirdParty'|'Custom'|'CustomCode'|'CustomDerived'|null $evaluatorType
 * @property 'AWS'|'DeepEval'|'AutoEval'|'Custom'|null $provider
 * @property 'TOOL_CALL'|'TRACE'|'SESSION' $level
 * @property 'ACTIVE'|'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property bool|null $lockedForModification
 * @property string|null $kmsKeyArn
 */
class GetEvaluatorResponse extends Response
{
}
