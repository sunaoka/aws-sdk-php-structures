<?php

namespace Sunaoka\Aws\Structures\Redshift\RebootCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 */
class RebootClusterRequest extends Request
{
    /**
     * @param array{ClusterIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
