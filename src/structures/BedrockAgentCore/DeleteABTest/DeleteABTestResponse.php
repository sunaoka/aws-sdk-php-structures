<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\DeleteABTest;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $abTestId
 * @property string $abTestArn
 * @property 'CREATING'|'ACTIVE'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED'|'FAILED' $status
 */
class DeleteABTestResponse extends Response
{
}
