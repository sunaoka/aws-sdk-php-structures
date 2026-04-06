<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DeregisterEcsCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EcsClusterArn
 */
class DeregisterEcsClusterRequest extends Request
{
    /**
     * @param array{EcsClusterArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
