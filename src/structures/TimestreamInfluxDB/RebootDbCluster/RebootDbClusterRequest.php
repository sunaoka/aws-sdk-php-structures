<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\RebootDbCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dbClusterId
 * @property list<string>|null $instanceIds
 */
class RebootDbClusterRequest extends Request
{
    /**
     * @param array{
     *     dbClusterId: string,
     *     instanceIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
