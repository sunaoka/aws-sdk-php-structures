<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListReviewTemplateAnswers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QuestionId
 * @property string|null $PillarId
 * @property string|null $QuestionTitle
 * @property list<Choice>|null $Choices
 * @property list<string>|null $SelectedChoices
 * @property list<ChoiceAnswerSummary>|null $ChoiceAnswerSummaries
 * @property bool|null $IsApplicable
 * @property 'UNANSWERED'|'ANSWERED'|null $AnswerStatus
 * @property 'OUT_OF_SCOPE'|'BUSINESS_PRIORITIES'|'ARCHITECTURE_CONSTRAINTS'|'OTHER'|'NONE'|null $Reason
 * @property 'PRIORITIZED'|'NON_PRIORITIZED'|null $QuestionType
 */
class ReviewTemplateAnswerSummary extends Shape
{
    /**
     * @param array{
     *     QuestionId?: string|null,
     *     PillarId?: string|null,
     *     QuestionTitle?: string|null,
     *     Choices?: list<Choice>|null,
     *     SelectedChoices?: list<string>|null,
     *     ChoiceAnswerSummaries?: list<ChoiceAnswerSummary>|null,
     *     IsApplicable?: bool|null,
     *     AnswerStatus?: 'UNANSWERED'|'ANSWERED'|null,
     *     Reason?: 'OUT_OF_SCOPE'|'BUSINESS_PRIORITIES'|'ARCHITECTURE_CONSTRAINTS'|'OTHER'|'NONE'|null,
     *     QuestionType?: 'PRIORITIZED'|'NON_PRIORITIZED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
