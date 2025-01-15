<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListLensReviewImprovements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QuestionId
 * @property string|null $PillarId
 * @property string|null $QuestionTitle
 * @property 'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE'|null $Risk
 * @property string|null $ImprovementPlanUrl
 * @property list<ChoiceImprovementPlan>|null $ImprovementPlans
 * @property JiraConfiguration|null $JiraConfiguration
 */
class ImprovementSummary extends Shape
{
    /**
     * @param array{
     *     QuestionId?: string|null,
     *     PillarId?: string|null,
     *     QuestionTitle?: string|null,
     *     Risk?: 'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE'|null,
     *     ImprovementPlanUrl?: string|null,
     *     ImprovementPlans?: list<ChoiceImprovementPlan>|null,
     *     JiraConfiguration?: JiraConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
