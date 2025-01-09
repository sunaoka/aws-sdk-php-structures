<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetReviewTemplateAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QuestionId
 * @property string $PillarId
 * @property string $QuestionTitle
 * @property string $QuestionDescription
 * @property string $ImprovementPlanUrl
 * @property string $HelpfulResourceUrl
 * @property string $HelpfulResourceDisplayText
 * @property list<Choice> $Choices
 * @property list<string> $SelectedChoices
 * @property list<ChoiceAnswer> $ChoiceAnswers
 * @property bool $IsApplicable
 * @property 'UNANSWERED'|'ANSWERED' $AnswerStatus
 * @property string $Notes
 * @property 'OUT_OF_SCOPE'|'BUSINESS_PRIORITIES'|'ARCHITECTURE_CONSTRAINTS'|'OTHER'|'NONE' $Reason
 */
class ReviewTemplateAnswer extends Shape
{
    /**
     * @param array{
     *     QuestionId?: string,
     *     PillarId?: string,
     *     QuestionTitle?: string,
     *     QuestionDescription?: string,
     *     ImprovementPlanUrl?: string,
     *     HelpfulResourceUrl?: string,
     *     HelpfulResourceDisplayText?: string,
     *     Choices?: list<Choice>,
     *     SelectedChoices?: list<string>,
     *     ChoiceAnswers?: list<ChoiceAnswer>,
     *     IsApplicable?: bool,
     *     AnswerStatus?: 'UNANSWERED'|'ANSWERED',
     *     Notes?: string,
     *     Reason?: 'OUT_OF_SCOPE'|'BUSINESS_PRIORITIES'|'ARCHITECTURE_CONSTRAINTS'|'OTHER'|'NONE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
