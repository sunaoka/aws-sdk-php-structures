<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\StartCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterArn
 */
class StartClusterRequest extends Request
{
    /**
     * @param array{clusterArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
