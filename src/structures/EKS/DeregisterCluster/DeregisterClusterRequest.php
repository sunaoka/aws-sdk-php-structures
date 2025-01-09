<?php

namespace Sunaoka\Aws\Structures\EKS\DeregisterCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeregisterClusterRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
