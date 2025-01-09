<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\DeleteCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 */
class DeleteClusterRequest extends Request
{
    /**
     * @param array{ClusterArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
