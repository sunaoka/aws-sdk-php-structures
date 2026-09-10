<?php

namespace Sunaoka\Aws\Structures\SageMaker\AttachClusterNodeNetworkInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property string $NodeId
 * @property string $NetworkInterfaceId
 */
class AttachClusterNodeNetworkInterfaceRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     NodeId: string,
     *     NetworkInterfaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
