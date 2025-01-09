<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityRuleRecommendationRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DataQualityRuleRecommendationRunFilter $Filter
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 */
class ListDataQualityRuleRecommendationRunsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\DataQualityRuleRecommendationRunFilter,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
