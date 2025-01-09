<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListReviewTemplateAnswers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChoiceId
 * @property 'SELECTED'|'NOT_APPLICABLE'|'UNSELECTED' $Status
 * @property 'OUT_OF_SCOPE'|'BUSINESS_PRIORITIES'|'ARCHITECTURE_CONSTRAINTS'|'OTHER'|'NONE' $Reason
 */
class ChoiceAnswerSummary extends Shape
{
    /**
     * @param array{
     *     ChoiceId?: string,
     *     Status?: 'SELECTED'|'NOT_APPLICABLE'|'UNSELECTED',
     *     Reason?: 'OUT_OF_SCOPE'|'BUSINESS_PRIORITIES'|'ARCHITECTURE_CONSTRAINTS'|'OTHER'|'NONE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
