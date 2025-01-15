<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListInsights;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListInsightsStatusFilter $StatusFilter
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListInsightsRequest extends Request
{
    /**
     * @param array{
     *     StatusFilter: Shapes\ListInsightsStatusFilter,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
