<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationFormSection|null $Section
 * @property EvaluationFormQuestion|null $Question
 */
class EvaluationFormItem extends Shape
{
    /**
     * @param array{
     *     Section?: EvaluationFormSection|null,
     *     Question?: EvaluationFormQuestion|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
