<?php

namespace Sunaoka\Aws\Structures\Deadline\AssumeQueueRoleForWorker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $fleetId
 * @property string $workerId
 * @property string $queueId
 */
class AssumeQueueRoleForWorkerRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     fleetId: string,
     *     workerId: string,
     *     queueId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
