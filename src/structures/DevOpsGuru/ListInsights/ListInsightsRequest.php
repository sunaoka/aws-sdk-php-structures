<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListInsights;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListInsightsStatusFilter $StatusFilter
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListInsightsRequest extends Request
{
    /**
     * @param array{
     *     StatusFilter: Shapes\ListInsightsStatusFilter,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
