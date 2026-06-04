<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DETECTIVE'|'PROACTIVE'|null $EvaluationMode
 * @property 'EXTERNAL'|'INTERNAL'|null $RuleEvaluationVisibility
 */
class DescribeConfigRulesFilters extends Shape
{
    /**
     * @param array{
     *     EvaluationMode?: 'DETECTIVE'|'PROACTIVE'|null,
     *     RuleEvaluationVisibility?: 'EXTERNAL'|'INTERNAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
