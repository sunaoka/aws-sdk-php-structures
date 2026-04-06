<?php

namespace Sunaoka\Aws\Structures\PCS\GetCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterIdentifier
 */
class GetClusterRequest extends Request
{
    /**
     * @param array{clusterIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
