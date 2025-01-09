<?php

namespace Sunaoka\Aws\Structures\Neptune\PromoteReadReplicaDBCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 */
class PromoteReadReplicaDBClusterRequest extends Request
{
    /**
     * @param array{DBClusterIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
