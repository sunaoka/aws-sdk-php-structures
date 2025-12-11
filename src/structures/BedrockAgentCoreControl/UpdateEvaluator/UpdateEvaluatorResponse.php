<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateEvaluator;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $evaluatorArn
 * @property string $evaluatorId
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'ACTIVE'|'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING' $status
 */
class UpdateEvaluatorResponse extends Response
{
}
