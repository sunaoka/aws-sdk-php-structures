<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTopicReviewedAnswers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ContributionAnalysisFactor> $Factors
 * @property ContributionAnalysisTimeRanges $TimeRanges
 * @property 'INCREASE'|'DECREASE'|'NEUTRAL' $Direction
 * @property 'ABSOLUTE_DIFFERENCE'|'CONTRIBUTION_PERCENTAGE'|'DEVIATION_FROM_EXPECTED'|'PERCENTAGE_DIFFERENCE' $SortType
 */
class TopicIRContributionAnalysis extends Shape
{
    /**
     * @param array{
     *     Factors?: list<ContributionAnalysisFactor>,
     *     TimeRanges?: ContributionAnalysisTimeRanges,
     *     Direction?: 'INCREASE'|'DECREASE'|'NEUTRAL',
     *     SortType?: 'ABSOLUTE_DIFFERENCE'|'CONTRIBUTION_PERCENTAGE'|'DEVIATION_FROM_EXPECTED'|'PERCENTAGE_DIFFERENCE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
