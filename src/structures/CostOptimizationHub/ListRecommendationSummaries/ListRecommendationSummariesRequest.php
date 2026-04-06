<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\ListRecommendationSummaries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Filter|null $filter
 * @property string $groupBy
 * @property int<0, 1000>|null $maxResults
 * @property list<'SavingsPercentage'>|null $metrics
 * @property string|null $nextToken
 */
class ListRecommendationSummariesRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\Filter|null,
     *     groupBy: string,
     *     maxResults?: int<0, 1000>|null,
     *     metrics?: list<'SavingsPercentage'>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
