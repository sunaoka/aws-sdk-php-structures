<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateWorkerSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $fleetId
 * @property array<string, Shapes\UpdatedSessionActionInfo>|null $updatedSessionActions
 * @property string $workerId
 */
class UpdateWorkerScheduleRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     fleetId: string,
     *     updatedSessionActions?: array<string, Shapes\UpdatedSessionActionInfo>|null,
     *     workerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
