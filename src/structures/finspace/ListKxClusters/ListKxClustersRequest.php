<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property 'HDB'|'RDB'|'GATEWAY'|'GP'|'TICKERPLANT'|null $clusterType
 * @property int<0, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListKxClustersRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     clusterType?: 'HDB'|'RDB'|'GATEWAY'|'GP'|'TICKERPLANT'|null,
     *     maxResults?: int<0, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
