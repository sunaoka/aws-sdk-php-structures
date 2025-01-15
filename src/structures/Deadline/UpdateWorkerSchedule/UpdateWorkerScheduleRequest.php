<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateWorkerSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $fleetId
 * @property string $workerId
 * @property array<string, Shapes\UpdatedSessionActionInfo>|null $updatedSessionActions
 */
class UpdateWorkerScheduleRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     fleetId: string,
     *     workerId: string,
     *     updatedSessionActions?: array<string, Shapes\UpdatedSessionActionInfo>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
