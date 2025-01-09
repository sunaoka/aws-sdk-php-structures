<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RemoteNodeNetwork> $remoteNodeNetworks
 * @property list<RemotePodNetwork> $remotePodNetworks
 */
class RemoteNetworkConfigResponse extends Shape
{
    /**
     * @param array{
     *     remoteNodeNetworks?: list<RemoteNodeNetwork>,
     *     remotePodNetworks?: list<RemotePodNetwork>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
