<?php

namespace Sunaoka\Aws\Structures\Connect\SubmitContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StringValue
 * @property double|null $NumericValue
 * @property bool|null $NotApplicable
 */
class EvaluationAnswerData extends Shape
{
    /**
     * @param array{
     *     StringValue?: string|null,
     *     NumericValue?: double|null,
     *     NotApplicable?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
