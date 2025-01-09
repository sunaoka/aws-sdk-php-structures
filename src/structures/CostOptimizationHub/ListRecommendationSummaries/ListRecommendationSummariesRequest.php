<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\ListRecommendationSummaries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Filter $filter
 * @property string $groupBy
 * @property int $maxResults
 * @property list<'SavingsPercentage'> $metrics
 * @property string $nextToken
 */
class ListRecommendationSummariesRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\Filter,
     *     groupBy: string,
     *     maxResults?: int,
     *     metrics?: list<'SavingsPercentage'>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
