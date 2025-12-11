<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteOnlineEvaluationConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $onlineEvaluationConfigArn
 * @property string $onlineEvaluationConfigId
 * @property 'ACTIVE'|'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING' $status
 */
class DeleteOnlineEvaluationConfigResponse extends Response
{
}
