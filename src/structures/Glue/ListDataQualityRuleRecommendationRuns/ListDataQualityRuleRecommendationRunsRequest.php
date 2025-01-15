<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityRuleRecommendationRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DataQualityRuleRecommendationRunFilter|null $Filter
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListDataQualityRuleRecommendationRunsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\DataQualityRuleRecommendationRunFilter|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
