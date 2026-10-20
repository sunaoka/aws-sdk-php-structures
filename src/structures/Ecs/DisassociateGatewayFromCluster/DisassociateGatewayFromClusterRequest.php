<?php

namespace Sunaoka\Aws\Structures\Ecs\DisassociateGatewayFromCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gateway
 * @property string $cluster
 */
class DisassociateGatewayFromClusterRequest extends Request
{
    /**
     * @param array{
     *     gateway: string,
     *     cluster: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
