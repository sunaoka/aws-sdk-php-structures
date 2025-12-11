<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateEvaluator;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $evaluatorArn
 * @property string $evaluatorId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'ACTIVE'|'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING' $status
 */
class CreateEvaluatorResponse extends Response
{
}
