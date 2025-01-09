<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListLensReviewImprovements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QuestionId
 * @property string $PillarId
 * @property string $QuestionTitle
 * @property 'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE' $Risk
 * @property string $ImprovementPlanUrl
 * @property list<ChoiceImprovementPlan> $ImprovementPlans
 * @property JiraConfiguration $JiraConfiguration
 */
class ImprovementSummary extends Shape
{
    /**
     * @param array{
     *     QuestionId?: string,
     *     PillarId?: string,
     *     QuestionTitle?: string,
     *     Risk?: 'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE',
     *     ImprovementPlanUrl?: string,
     *     ImprovementPlans?: list<ChoiceImprovementPlan>,
     *     JiraConfiguration?: JiraConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
