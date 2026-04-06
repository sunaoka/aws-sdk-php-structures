<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetRemoteAccessSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $remoteDriverEndpoint
 * @property string|null $interactiveEndpoint
 */
class RemoteAccessEndpoints extends Shape
{
    /**
     * @param array{
     *     remoteDriverEndpoint?: string|null,
     *     interactiveEndpoint?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
