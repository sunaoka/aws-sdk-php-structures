<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityRulesetEvaluationRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DataQualityRulesetEvaluationRunFilter|null $Filter
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListDataQualityRulesetEvaluationRunsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\DataQualityRulesetEvaluationRunFilter|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
