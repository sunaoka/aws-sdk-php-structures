<?php

namespace Sunaoka\Aws\Structures\DocDB\StartDBCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 */
class StartDBClusterRequest extends Request
{
    /**
     * @param array{DBClusterIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
