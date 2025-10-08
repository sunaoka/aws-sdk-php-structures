<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\CreateWorkspaceInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $TcpEstablishedTimeout
 * @property int<0, max>|null $UdpStreamTimeout
 * @property int<0, max>|null $UdpTimeout
 */
class ConnectionTrackingSpecificationRequest extends Shape
{
    /**
     * @param array{
     *     TcpEstablishedTimeout?: int<0, max>|null,
     *     UdpStreamTimeout?: int<0, max>|null,
     *     UdpTimeout?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
