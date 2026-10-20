<?php

namespace Sunaoka\Aws\Structures\Ecs\AssociateGatewayWithCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gateway
 * @property string $cluster
 */
class AssociateGatewayWithClusterRequest extends Request
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
