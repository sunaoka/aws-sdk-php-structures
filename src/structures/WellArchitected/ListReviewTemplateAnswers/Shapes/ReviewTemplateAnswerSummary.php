<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListReviewTemplateAnswers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QuestionId
 * @property string $PillarId
 * @property string $QuestionTitle
 * @property list<Choice> $Choices
 * @property list<string> $SelectedChoices
 * @property list<ChoiceAnswerSummary> $ChoiceAnswerSummaries
 * @property bool $IsApplicable
 * @property 'UNANSWERED'|'ANSWERED' $AnswerStatus
 * @property 'OUT_OF_SCOPE'|'BUSINESS_PRIORITIES'|'ARCHITECTURE_CONSTRAINTS'|'OTHER'|'NONE' $Reason
 * @property 'PRIORITIZED'|'NON_PRIORITIZED' $QuestionType
 */
class ReviewTemplateAnswerSummary extends Shape
{
    /**
     * @param array{
     *     QuestionId?: string,
     *     PillarId?: string,
     *     QuestionTitle?: string,
     *     Choices?: list<Choice>,
     *     SelectedChoices?: list<string>,
     *     ChoiceAnswerSummaries?: list<ChoiceAnswerSummary>,
     *     IsApplicable?: bool,
     *     AnswerStatus?: 'UNANSWERED'|'ANSWERED',
     *     Reason?: 'OUT_OF_SCOPE'|'BUSINESS_PRIORITIES'|'ARCHITECTURE_CONSTRAINTS'|'OTHER'|'NONE',
     *     QuestionType?: 'PRIORITIZED'|'NON_PRIORITIZED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
