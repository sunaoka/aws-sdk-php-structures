<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\CreateABTest;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $abTestId
 * @property string $abTestArn
 * @property string|null $name
 * @property 'CREATING'|'ACTIVE'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED'|'FAILED' $status
 * @property 'PAUSED'|'RUNNING'|'STOPPED'|'NOT_STARTED' $executionStatus
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class CreateABTestResponse extends Response
{
}
