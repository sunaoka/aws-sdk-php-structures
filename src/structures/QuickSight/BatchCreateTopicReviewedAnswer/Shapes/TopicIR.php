<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchCreateTopicReviewedAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TopicIRMetric> $Metrics
 * @property list<TopicIRGroupBy> $GroupByList
 * @property list<list<TopicIRFilterOption>> $Filters
 * @property TopicSortClause $Sort
 * @property TopicIRContributionAnalysis $ContributionAnalysis
 * @property VisualOptions $Visual
 */
class TopicIR extends Shape
{
    /**
     * @param array{
     *     Metrics?: list<TopicIRMetric>,
     *     GroupByList?: list<TopicIRGroupBy>,
     *     Filters?: list<list<TopicIRFilterOption>>,
     *     Sort?: TopicSortClause,
     *     ContributionAnalysis?: TopicIRContributionAnalysis,
     *     Visual?: VisualOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
