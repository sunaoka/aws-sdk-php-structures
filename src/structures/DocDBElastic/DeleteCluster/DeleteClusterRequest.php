<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\DeleteCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterArn
 */
class DeleteClusterRequest extends Request
{
    /**
     * @param array{clusterArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
