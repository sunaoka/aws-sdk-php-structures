<?php

namespace Sunaoka\Aws\Structures\Deadline\AssumeQueueRoleForWorker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $fleetId
 * @property string $queueId
 * @property string $workerId
 */
class AssumeQueueRoleForWorkerRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     fleetId: string,
     *     queueId: string,
     *     workerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
