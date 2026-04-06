<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationFormItemEnablementSource $Source
 * @property list<EvaluationFormItemEnablementSourceValue> $Values
 * @property 'IN'|'NOT_IN'|'ALL_IN'|'EXACT' $Comparator
 */
class EvaluationFormItemEnablementExpression extends Shape
{
    /**
     * @param array{
     *     Source: EvaluationFormItemEnablementSource,
     *     Values: list<EvaluationFormItemEnablementSourceValue>,
     *     Comparator: 'IN'|'NOT_IN'|'ALL_IN'|'EXACT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
