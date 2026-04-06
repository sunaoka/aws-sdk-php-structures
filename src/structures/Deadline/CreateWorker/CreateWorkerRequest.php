<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateWorker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $farmId
 * @property string $fleetId
 * @property Shapes\HostPropertiesRequest|null $hostProperties
 */
class CreateWorkerRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     farmId: string,
     *     fleetId: string,
     *     hostProperties?: Shapes\HostPropertiesRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
