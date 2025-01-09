<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 */
class DeleteClusterRequest extends Request
{
    /**
     * @param array{cluster: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
