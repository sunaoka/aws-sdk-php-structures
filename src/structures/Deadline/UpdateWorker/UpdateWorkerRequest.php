<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateWorker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $fleetId
 * @property string $workerId
 * @property 'STARTED'|'STOPPING'|'STOPPED'|null $status
 * @property Shapes\WorkerCapabilities|null $capabilities
 * @property Shapes\HostPropertiesRequest|null $hostProperties
 */
class UpdateWorkerRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     fleetId: string,
     *     workerId: string,
     *     status?: 'STARTED'|'STOPPING'|'STOPPED'|null,
     *     capabilities?: Shapes\WorkerCapabilities|null,
     *     hostProperties?: Shapes\HostPropertiesRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
