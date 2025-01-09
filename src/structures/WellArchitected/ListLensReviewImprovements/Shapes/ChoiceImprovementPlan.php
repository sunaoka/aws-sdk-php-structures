<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListLensReviewImprovements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChoiceId
 * @property string $DisplayText
 * @property string $ImprovementPlanUrl
 */
class ChoiceImprovementPlan extends Shape
{
    /**
     * @param array{
     *     ChoiceId?: string,
     *     DisplayText?: string,
     *     ImprovementPlanUrl?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
