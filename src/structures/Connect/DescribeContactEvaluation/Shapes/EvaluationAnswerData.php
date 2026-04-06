<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StringValue
 * @property double|null $NumericValue
 * @property list<string>|null $StringValues
 * @property string|null $DateTimeValue
 * @property bool|null $NotApplicable
 */
class EvaluationAnswerData extends Shape
{
    /**
     * @param array{
     *     StringValue?: string|null,
     *     NumericValue?: double|null,
     *     StringValues?: list<string>|null,
     *     DateTimeValue?: string|null,
     *     NotApplicable?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
