<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\GetCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterArn
 */
class GetClusterRequest extends Request
{
    /**
     * @param array{clusterArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
