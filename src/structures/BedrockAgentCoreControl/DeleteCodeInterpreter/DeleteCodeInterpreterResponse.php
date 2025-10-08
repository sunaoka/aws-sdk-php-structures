<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteCodeInterpreter;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $codeInterpreterId
 * @property 'CREATING'|'CREATE_FAILED'|'READY'|'DELETING'|'DELETE_FAILED'|'DELETED' $status
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 */
class DeleteCodeInterpreterResponse extends Response
{
}
