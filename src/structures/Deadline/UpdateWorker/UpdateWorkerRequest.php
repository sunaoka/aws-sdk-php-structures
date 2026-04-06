<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateWorker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\WorkerCapabilities|null $capabilities
 * @property string $farmId
 * @property string $fleetId
 * @property Shapes\HostPropertiesRequest|null $hostProperties
 * @property 'STARTED'|'STOPPING'|'STOPPED'|null $status
 * @property string $workerId
 */
class UpdateWorkerRequest extends Request
{
    /**
     * @param array{
     *     capabilities?: Shapes\WorkerCapabilities|null,
     *     farmId: string,
     *     fleetId: string,
     *     hostProperties?: Shapes\HostPropertiesRequest|null,
     *     status?: 'STARTED'|'STOPPING'|'STOPPED'|null,
     *     workerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
