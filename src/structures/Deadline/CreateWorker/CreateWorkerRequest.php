<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateWorker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $fleetId
 * @property Shapes\HostPropertiesRequest|null $hostProperties
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateWorkerRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     fleetId: string,
     *     hostProperties?: Shapes\HostPropertiesRequest|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
