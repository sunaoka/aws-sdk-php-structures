<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateCodeInterpreter;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $codeInterpreterId
 * @property string $codeInterpreterArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'CREATING'|'CREATE_FAILED'|'READY'|'DELETING'|'DELETE_FAILED'|'DELETED' $status
 */
class CreateCodeInterpreterResponse extends Response
{
}
