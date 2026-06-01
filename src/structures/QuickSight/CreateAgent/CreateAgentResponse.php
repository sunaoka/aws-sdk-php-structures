<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAgent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $AgentId
 * @property 'ACTIVE'|'UPDATING'|'FAILED'|'CREATING' $AgentStatus
 * @property string $AgentName
 * @property string|null $RequestId
 */
class CreateAgentResponse extends Response
{
}
