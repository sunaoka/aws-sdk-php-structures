<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListReviewTemplateAnswers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChoiceId
 * @property 'SELECTED'|'NOT_APPLICABLE'|'UNSELECTED'|null $Status
 * @property 'OUT_OF_SCOPE'|'BUSINESS_PRIORITIES'|'ARCHITECTURE_CONSTRAINTS'|'OTHER'|'NONE'|null $Reason
 */
class ChoiceAnswerSummary extends Shape
{
    /**
     * @param array{
     *     ChoiceId?: string|null,
     *     Status?: 'SELECTED'|'NOT_APPLICABLE'|'UNSELECTED'|null,
     *     Reason?: 'OUT_OF_SCOPE'|'BUSINESS_PRIORITIES'|'ARCHITECTURE_CONSTRAINTS'|'OTHER'|'NONE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
