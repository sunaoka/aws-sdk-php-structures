<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAgent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $AgentId
 * @property 'ACTIVE'|'UPDATING'|'FAILED'|'CREATING' $AgentStatus
 * @property list<Shapes\FailedToUpdateAssociation>|null $FailedToAddSpaces
 * @property list<Shapes\FailedToUpdateAssociation>|null $FailedToRemoveSpaces
 * @property list<Shapes\FailedToUpdateAssociation>|null $FailedToAddActionConnectors
 * @property list<Shapes\FailedToUpdateAssociation>|null $FailedToRemoveActionConnectors
 * @property string|null $RequestId
 */
class UpdateAgentResponse extends Response
{
}
