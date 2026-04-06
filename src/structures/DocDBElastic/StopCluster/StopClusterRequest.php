<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\StopCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterArn
 */
class StopClusterRequest extends Request
{
    /**
     * @param array{clusterArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
