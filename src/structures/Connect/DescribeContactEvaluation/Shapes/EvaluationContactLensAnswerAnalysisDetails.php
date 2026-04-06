<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EvaluationAutomationRuleCategory>|null $MatchedRuleCategories
 */
class EvaluationContactLensAnswerAnalysisDetails extends Shape
{
    /**
     * @param array{MatchedRuleCategories?: list<EvaluationAutomationRuleCategory>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
