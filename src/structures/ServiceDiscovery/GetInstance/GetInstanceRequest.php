<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceId
 * @property string $InstanceId
 */
class GetInstanceRequest extends Request
{
    /**
     * @param array{
     *     ServiceId: string,
     *     InstanceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
