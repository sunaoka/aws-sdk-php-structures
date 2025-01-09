<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property 'HDB'|'RDB'|'GATEWAY'|'GP'|'TICKERPLANT' $clusterType
 * @property int $maxResults
 * @property string $nextToken
 */
class ListKxClustersRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     clusterType?: 'HDB'|'RDB'|'GATEWAY'|'GP'|'TICKERPLANT',
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
