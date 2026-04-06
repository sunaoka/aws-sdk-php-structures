<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\DeleteDbCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dbClusterId
 */
class DeleteDbClusterRequest extends Request
{
    /**
     * @param array{dbClusterId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
