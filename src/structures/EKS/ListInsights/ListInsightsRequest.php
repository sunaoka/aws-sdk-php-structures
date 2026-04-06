<?php

namespace Sunaoka\Aws\Structures\EKS\ListInsights;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property Shapes\InsightsFilter|null $filter
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListInsightsRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     filter?: Shapes\InsightsFilter|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
