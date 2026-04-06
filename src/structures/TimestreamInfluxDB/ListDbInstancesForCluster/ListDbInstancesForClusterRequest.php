<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\ListDbInstancesForCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dbClusterId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListDbInstancesForClusterRequest extends Request
{
    /**
     * @param array{
     *     dbClusterId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
