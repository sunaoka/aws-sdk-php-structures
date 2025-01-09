<?php

namespace Sunaoka\Aws\Structures\Neptune\StopDBCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 */
class StopDBClusterRequest extends Request
{
    /**
     * @param array{DBClusterIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
