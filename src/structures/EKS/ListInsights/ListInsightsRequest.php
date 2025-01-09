<?php

namespace Sunaoka\Aws\Structures\EKS\ListInsights;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property Shapes\InsightsFilter $filter
 * @property int $maxResults
 * @property string $nextToken
 */
class ListInsightsRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     filter?: Shapes\InsightsFilter,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
