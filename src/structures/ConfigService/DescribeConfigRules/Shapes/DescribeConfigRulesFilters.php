<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DETECTIVE'|'PROACTIVE' $EvaluationMode
 */
class DescribeConfigRulesFilters extends Shape
{
    /**
     * @param array{EvaluationMode?: 'DETECTIVE'|'PROACTIVE'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
