<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateWorkerSchedule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, Shapes\AssignedSession> $assignedSessions
 * @property array<string, list<string>> $cancelSessionActions
 * @property 'STOPPED' $desiredWorkerStatus
 * @property int $updateIntervalSeconds
 */
class UpdateWorkerScheduleResponse extends Response
{
}
