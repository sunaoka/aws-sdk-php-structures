<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListLensReviewImprovements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChoiceId
 * @property string|null $DisplayText
 * @property string|null $ImprovementPlanUrl
 */
class ChoiceImprovementPlan extends Shape
{
    /**
     * @param array{
     *     ChoiceId?: string|null,
     *     DisplayText?: string|null,
     *     ImprovementPlanUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
