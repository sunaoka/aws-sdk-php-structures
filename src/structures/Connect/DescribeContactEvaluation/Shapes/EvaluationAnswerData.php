<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StringValue
 * @property double $NumericValue
 * @property bool $NotApplicable
 */
class EvaluationAnswerData extends Shape
{
    /**
     * @param array{
     *     StringValue?: string,
     *     NumericValue?: double,
     *     NotApplicable?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
