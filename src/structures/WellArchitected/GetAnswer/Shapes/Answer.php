<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QuestionId
 * @property string|null $PillarId
 * @property string|null $QuestionTitle
 * @property string|null $QuestionDescription
 * @property string|null $ImprovementPlanUrl
 * @property string|null $HelpfulResourceUrl
 * @property string|null $HelpfulResourceDisplayText
 * @property list<Choice>|null $Choices
 * @property list<string>|null $SelectedChoices
 * @property list<ChoiceAnswer>|null $ChoiceAnswers
 * @property bool|null $IsApplicable
 * @property 'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE'|null $Risk
 * @property string|null $Notes
 * @property 'OUT_OF_SCOPE'|'BUSINESS_PRIORITIES'|'ARCHITECTURE_CONSTRAINTS'|'OTHER'|'NONE'|null $Reason
 * @property JiraConfiguration|null $JiraConfiguration
 */
class Answer extends Shape
{
    /**
     * @param array{
     *     QuestionId?: string|null,
     *     PillarId?: string|null,
     *     QuestionTitle?: string|null,
     *     QuestionDescription?: string|null,
     *     ImprovementPlanUrl?: string|null,
     *     HelpfulResourceUrl?: string|null,
     *     HelpfulResourceDisplayText?: string|null,
     *     Choices?: list<Choice>|null,
     *     SelectedChoices?: list<string>|null,
     *     ChoiceAnswers?: list<ChoiceAnswer>|null,
     *     IsApplicable?: bool|null,
     *     Risk?: 'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE'|null,
     *     Notes?: string|null,
     *     Reason?: 'OUT_OF_SCOPE'|'BUSINESS_PRIORITIES'|'ARCHITECTURE_CONSTRAINTS'|'OTHER'|'NONE'|null,
     *     JiraConfiguration?: JiraConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
