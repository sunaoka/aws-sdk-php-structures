<?php

namespace Sunaoka\Aws\Structures\Redshift\PauseCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 */
class PauseClusterRequest extends Request
{
    /**
     * @param array{ClusterIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
