<?php

namespace Sunaoka\Aws\Structures\Rds\RebootDBCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 */
class RebootDBClusterRequest extends Request
{
    /**
     * @param array{DBClusterIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
