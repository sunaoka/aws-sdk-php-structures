<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetEvaluator;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $evaluatorArn
 * @property string $evaluatorId
 * @property string $evaluatorName
 * @property string|null $description
 * @property Shapes\EvaluatorConfig $evaluatorConfig
 * @property 'TOOL_CALL'|'TRACE'|'SESSION' $level
 * @property 'ACTIVE'|'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property bool|null $lockedForModification
 */
class GetEvaluatorResponse extends Response
{
}
