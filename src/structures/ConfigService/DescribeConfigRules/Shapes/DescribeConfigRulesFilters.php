<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DETECTIVE'|'PROACTIVE'|null $EvaluationMode
 */
class DescribeConfigRulesFilters extends Shape
{
    /**
     * @param array{EvaluationMode?: 'DETECTIVE'|'PROACTIVE'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
