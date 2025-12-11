<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\RollbackAutomationEvent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $eventId
 * @property 'Ready'|'InProgress'|'Complete'|'Failed'|'Cancelled'|'RollbackReady'|'RollbackInProgress'|'RollbackComplete'|'RollbackFailed'|null $eventStatus
 */
class RollbackAutomationEventResponse extends Response
{
}
