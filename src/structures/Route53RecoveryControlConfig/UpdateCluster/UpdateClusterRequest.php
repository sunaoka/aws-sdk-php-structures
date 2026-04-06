<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\UpdateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property 'IPV4'|'DUALSTACK' $NetworkType
 */
class UpdateClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     NetworkType: 'IPV4'|'DUALSTACK'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
