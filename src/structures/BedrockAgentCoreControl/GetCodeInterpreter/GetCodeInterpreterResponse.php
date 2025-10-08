<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetCodeInterpreter;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $codeInterpreterId
 * @property string $codeInterpreterArn
 * @property string $name
 * @property string|null $description
 * @property string|null $executionRoleArn
 * @property Shapes\CodeInterpreterNetworkConfiguration $networkConfiguration
 * @property 'CREATING'|'CREATE_FAILED'|'READY'|'DELETING'|'DELETE_FAILED'|'DELETED' $status
 * @property string|null $failureReason
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 */
class GetCodeInterpreterResponse extends Response
{
}
