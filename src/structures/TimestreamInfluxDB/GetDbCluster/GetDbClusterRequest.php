<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\GetDbCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dbClusterId
 */
class GetDbClusterRequest extends Request
{
    /**
     * @param array{dbClusterId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
