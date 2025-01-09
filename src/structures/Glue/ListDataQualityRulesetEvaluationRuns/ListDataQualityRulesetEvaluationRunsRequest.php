<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityRulesetEvaluationRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DataQualityRulesetEvaluationRunFilter $Filter
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListDataQualityRulesetEvaluationRunsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\DataQualityRulesetEvaluationRunFilter,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
