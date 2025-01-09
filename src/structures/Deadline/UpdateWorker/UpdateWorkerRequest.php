<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateWorker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $fleetId
 * @property string $workerId
 * @property 'STARTED'|'STOPPING'|'STOPPED' $status
 * @property Shapes\WorkerCapabilities $capabilities
 * @property Shapes\HostPropertiesRequest $hostProperties
 */
class UpdateWorkerRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     fleetId: string,
     *     workerId: string,
     *     status?: 'STARTED'|'STOPPING'|'STOPPED',
     *     capabilities?: Shapes\WorkerCapabilities,
     *     hostProperties?: Shapes\HostPropertiesRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
