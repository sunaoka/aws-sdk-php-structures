<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\StartAutomationEvent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $recommendedActionId
 * @property string|null $eventId
 * @property 'Ready'|'InProgress'|'Complete'|'Failed'|'Cancelled'|'RollbackReady'|'RollbackInProgress'|'RollbackComplete'|'RollbackFailed'|null $eventStatus
 */
class StartAutomationEventResponse extends Response
{
}
