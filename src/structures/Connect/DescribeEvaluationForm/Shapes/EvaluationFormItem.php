<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationFormSection $Section
 * @property EvaluationFormQuestion $Question
 */
class EvaluationFormItem extends Shape
{
    /**
     * @param array{
     *     Section?: EvaluationFormSection,
     *     Question?: EvaluationFormQuestion
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
