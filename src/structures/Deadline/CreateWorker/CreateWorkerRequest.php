<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateWorker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $fleetId
 * @property Shapes\HostPropertiesRequest $hostProperties
 * @property string $clientToken
 */
class CreateWorkerRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     fleetId: string,
     *     hostProperties?: Shapes\HostPropertiesRequest,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
