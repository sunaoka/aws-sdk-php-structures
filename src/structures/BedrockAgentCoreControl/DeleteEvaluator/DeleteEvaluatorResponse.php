<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteEvaluator;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $evaluatorArn
 * @property string $evaluatorId
 * @property 'ACTIVE'|'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING' $status
 */
class DeleteEvaluatorResponse extends Response
{
}
