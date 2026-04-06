<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTopicReviewedAnswers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ContributionAnalysisFactor>|null $Factors
 * @property ContributionAnalysisTimeRanges|null $TimeRanges
 * @property 'INCREASE'|'DECREASE'|'NEUTRAL'|null $Direction
 * @property 'ABSOLUTE_DIFFERENCE'|'CONTRIBUTION_PERCENTAGE'|'DEVIATION_FROM_EXPECTED'|'PERCENTAGE_DIFFERENCE'|null $SortType
 */
class TopicIRContributionAnalysis extends Shape
{
    /**
     * @param array{
     *     Factors?: list<ContributionAnalysisFactor>|null,
     *     TimeRanges?: ContributionAnalysisTimeRanges|null,
     *     Direction?: 'INCREASE'|'DECREASE'|'NEUTRAL'|null,
     *     SortType?: 'ABSOLUTE_DIFFERENCE'|'CONTRIBUTION_PERCENTAGE'|'DEVIATION_FROM_EXPECTED'|'PERCENTAGE_DIFFERENCE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
