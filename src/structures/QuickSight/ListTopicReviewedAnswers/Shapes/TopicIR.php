<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTopicReviewedAnswers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TopicIRMetric>|null $Metrics
 * @property list<TopicIRGroupBy>|null $GroupByList
 * @property list<list<TopicIRFilterOption>>|null $Filters
 * @property TopicSortClause|null $Sort
 * @property TopicIRContributionAnalysis|null $ContributionAnalysis
 * @property VisualOptions|null $Visual
 */
class TopicIR extends Shape
{
    /**
     * @param array{
     *     Metrics?: list<TopicIRMetric>|null,
     *     GroupByList?: list<TopicIRGroupBy>|null,
     *     Filters?: list<list<TopicIRFilterOption>>|null,
     *     Sort?: TopicSortClause|null,
     *     ContributionAnalysis?: TopicIRContributionAnalysis|null,
     *     Visual?: VisualOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
